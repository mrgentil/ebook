<?php

namespace App\Http\Controllers;

use App\Helpers\Pageable;
use App\Repository\BlogRepository;
use App\Repository\BookRepository;
use App\Repository\CategoryRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use Pageable;
    /**
     * @var BookRepository
     */
    private $bookRepository;

    /**
     * Create a new controller instance.
     *
     * @param BookRepository $bookRepository
     */
    public function __construct(BookRepository $bookRepository)
    {
       // $this->middleware('auth');
        $this->bookRepository = $bookRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @param BlogRepository $blogRepository
     * @param CategoryRepository $categoryRepository
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(BlogRepository $blogRepository, CategoryRepository $categoryRepository)
    {
        $posts = $blogRepository->getLatest(10);
        $books = $this->bookRepository->getBooks(8);
        $categories = $categoryRepository->getBooksCategories();
        $counter = 2;
        $page = $this->getPageInfo('accueil');
        return view('home', compact('posts', 'books', 'categories', 'counter', 'page'));
    }
}
