<?php

namespace App;

use Codebyray\ReviewRateable\Contracts\ReviewRateable;
use Codebyray\ReviewRateable\Traits\ReviewRateable as ReviewRateableTrait;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Jenssegers\Date\Date;
use Kyslik\ColumnSortable\Sortable;
use Nicolaslopezj\Searchable\SearchableTrait;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Facades\Voyager;

class Book extends Model implements ReviewRateable
{
    use Favoriteable, ReviewRateableTrait, SearchableTrait, Sortable;

    protected $fillable = ['title', 'slug', 'description', 'file', 'cost', 'status', 'category_id', 'pdf', 'user_id', 'author_name', 'active'];
    public $sortable = ['title', 'cost'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        Date::setLocale('fr');
    }
    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'books.title' => 10,
            'categories.name' => 5
            //'properties.description' => 10,
        ],
        'joins' => [
            'categories' => ['categories.id', 'books.category_id']
        ]
    ];
    public function getCreatedAtAttribute($created_at)
    {
        return Date::make($created_at)->format(' j F, Y');
    }
    
    public function getFileAttribute($image)
    {
        return $image;
    }

    public function getFileInFrontAttribute()
    {
        $image = $this->file;
        return Voyager::image($image);
        if (Str::startsWith($image, 'http://') || Str::startsWith($image, 'https://')) {
            return asset(Voyager::image($image));
        }
        return Voyager::image($image);

    }

    /*public function getPdfAttribute($pdf)
    {
        //dd(json_decode($pdf));
        foreach (json_decode($pdf) as $file)
        {
            dd($file->download_link);
        }
    }*/
    public function getDownloadLinkAttribute()
    {
        $pdf = json_decode($this->pdf);
        foreach ($pdf as $file)
        {
            return $file->download_link;
        }
    }

    public function getSlugLinkAttribute()
    {
        return route('books.show', $this->id . '-' . $this->slug);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getCountReviewsAttribute()
    {
        return $this->getApprovedRatings($this->id)->count();
    }


}
