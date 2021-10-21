<?php

namespace App\Http\Controllers;

use App\Helpers\Pageable;
use App\Repository\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
    use Pageable;

    /**
     * @var BookRepository
     */
    private $bookRepository;

    /**
     * BookController constructor.
     * @param BookRepository $bookRepository
     */
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function index()
    {

        $query = request()->query('category');
        $page = $this->getPageInfo('livres');

        $categoryName = null;
        if ($query) {
            $books = $this->bookRepository->getBookByCategory($query, 20);
            $categoryName = $this->bookRepository->getNameByCategory($query);
        } else {
            $books = $this->bookRepository->getBooks(20);
        }

        return view('books.index', compact('books', 'categoryName', 'query', 'page'));
    }

    public function show(string $slug)
    {
        $book = $this->bookRepository->getBook($slug);
        $isFavorited  = $book->isFavorited();
        $ratings = $book->getApprovedRatings($book->id, 'desc');

        $related_books = $this->bookRepository->getRelatedBooks($slug, $book->category_id, 4);
        $count_rating = $book->countRating()[0];

        // Get Overall Average Rating
        $averageRating = $book->averageRating()[0];

        return view('books.show', compact('book', 'isFavorited', 'related_books', 'ratings', 'count_rating', 'averageRating'));
    }
}
