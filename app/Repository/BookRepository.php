<?php


namespace App\Repository;


use App\Book;
use App\Traits\Fileable;
use App\Traits\Imageable;
use App\Traits\Removable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class BookRepository
{
    use Imageable, Fileable, Removable;

    public function getBooks(?int $limit = 9)
    {
        return Book::query()->with(['user', 'category'])
            ->where('active', 'active')
            ->orderBy('id', 'desc')
            ->paginate($limit);
    }

    public function getBookByCategory(string $category, ?int $limit = 9)
    {
        return Book::query()
            ->with(['user', 'category', 'ratings'])
            ->whereHas('category', function (Builder $builder) use ($category) {
                $builder->where('slug', $category);
            })
            ->orderBy('id', 'desc')
            ->where('active', 'active')
            ->paginate($limit);
    }

    public function getBook(string $slug)
    {
        $id = explode('-', $slug)[0];
        $slug = substr($slug, strpos($slug, explode('-', $slug)[1]));

        return Book::query()
            ->with(['user', 'category'])
            ->where('active', 'active')
            ->where('id', $id)
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function getRelatedBooks(string $slug, string $category_id, ?int $limit = 4)
    {
        $id = $this->getBookIdFromSlug($slug);

        return Book::query()
            ->where('category_id', $category_id)
            ->with(['user'])
            ->where('active', 'active')
            ->where('id', '<>', $id)
            ->orderBy('id', 'desc')
            ->limit($limit)->get();
    }

    private function getBookIdFromSlug(string $slug)
    {
        return $id = explode('-', $slug)[0];
    }


    public function getNameByCategory(string $category)
    {
        return (Category::query()->select('name')->where('slug', $category)->first())->name;
    }

    public function getUsersBooks()
    {
        return Book::query()->with(['category'])
            ->where('active', 'active')
            ->where('user_id', auth()->user()->id)
            ->orderBy('id', 'desc')
            ->paginate(10);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $this->handleImage($request->file('file'), 'books');
        }else{
            $image = $request->get('status') === 'PAYANT' ? 'books' . DIRECTORY_SEPARATOR . 'paying.jpg' : 'books' . DIRECTORY_SEPARATOR . 'free.jpg';
        }
        $file = $this->handleFile($request, 'books');

        Book::query()->create([
            'title' => $request->get('title'),
            'slug' => str_slug($request->get('title')),
            'description' => $request->get('description'),
            'file' => $image,
            'cost' => $request->get('status') === 'PAYANT' ? $request->get('cost') : null,
            'status' => $request->get('status'),
            'category_id' => $request->get('category_id'),
            'pdf' => $file,
            'user_id' => auth()->user()->id
        ]);
    }

    public function update(int $id, Request $request)
    {
        $query = Book::query()->where('id', $id);

        $query->update([
            'title' => $request->get('title'),
            'slug' => str_slug($request->get('title')),
            'description' => $request->get('description'),
            'cost' => $request->get('status') === 'PAYANT' ? $request->get('cost') : null,
            'status' => $request->get('status'),
            'category_id' => $request->get('category_id'),
        ]);

        if ($request->hasFile('file')) {
            $image = $this->handleFile($request, 'books');
            $query->update([
                'file' => $image,
            ]);
            $this->deleteFileIfExists($image);
        }
        if ($request->hasFile('pdf')) {
            $file = $this->handleFile($request, 'books');

            $file = json_decode($this->$file);
            foreach ($file as $f) {
                $this->deleteFileIfExists($f->download_link);
            }
            $query->update([
                'pdf' => $file,
            ]);
        }
    }
}
