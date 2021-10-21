<?php


namespace App\Repository;


use App\Book;
use Illuminate\Http\Request;

class SearchRepository
{

    /**
     * @var string
     */
    public $query = '';

    /**
     * @var array
     */
    public $categories = [];

    /**
     * @var null|integer
     */
    public $max;

    /**
     * @var null|integer
     */
    public $min;

    /**
     * @var boolean
     */
    public $free = false;

    /**
     * @param Request $request
     * @return Book[]
     */
    public function findSearch(Request $request)
    {
        $books  = $this->getSearchQuery($request);
        return ($books->paginate(20))->withPath(request()->fullUrl());
    }

    /**
     * @param Request $request
     * @return integer[]
     */
    public function finMinMax(Request $request)
    {
        $results = $this->getSearchQuery($request, true)
            ->selectRaw('MIN(cost) as min')
            ->selectRaw('MAX(cost) as max')
            ->get();
        return [$results[0]->min, $results[0]->max];
    }

    private function getSearchQuery(Request $request, $ignorePrice = false)
    {
        $query = $request->query('query');
        $books = (new Book())->newQuery();

        if (!empty($request->query) && $ignorePrice === false) {
            $books = Book::query()->search($query, null, true, true);
        }

        if (!empty($request->min) && $ignorePrice === false) {
            if ((!empty($request->max) && $request->min < $request->max) || empty($request->max)) {
                $books = $books->whereRaw('cost >= ' . $request->min);
            }
        }

        if (!empty($request->max)) {
            $books = $books->whereRaw('cost <= ' . $request->max);
        }

        if (!empty($request->categories)) {
            $books = $books->whereIn('category_id', $request->categories);
        }

        if (!empty($request->status)) {
            $books = $books->where('status', 'GRATUIT');
        }
        return $books;
    }
}
