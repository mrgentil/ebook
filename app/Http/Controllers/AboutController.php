<?php

namespace App\Http\Controllers;

use App\Category;
use App\Helpers\Pageable;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    use Pageable;

    public function index()
    {
        $about_categories = Category::query()
            ->with('books')
            ->where('order', 3)
            ->get();
        $counter = 1;
        $page = $this->getPageInfo('a-propos');
        return view('about.index', compact('about_categories', 'counter', 'page'));
    }
}
