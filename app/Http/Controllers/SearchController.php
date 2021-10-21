<?php

namespace App\Http\Controllers;

use App\Book;
use App\Repository\CategoryRepository;
use App\Repository\SearchRepository;
use App\Traits\Paginable;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    use Paginable;

    /**
     * @param Request $request
     * @param SearchRepository $searchRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request, SearchRepository $searchRepository)
    {
        $books = $searchRepository->findSearch($request);
        [$min, $max] = $searchRepository->finMinMax($request);
        if ($request->query('ajax')) {
            $content =  null;
            $sorting = null;
            $pagination = null;
            try {
                $content = view('partials.search.books', compact('books'))->render();
            } catch (\Throwable $e) {
            }
            try {
                $sorting = view('partials.search.sorting', compact('books'))->render();
            } catch (\Throwable $e) {
            }
            try {
                $pagination = view('partials.search.pagination', compact('books'))->render();
            } catch (\Throwable $e) {
            }
            return response()->json([
                'books' => $books,
                'content' => $content,
                'sorting' => $sorting,
                'pagination' => $pagination,
                'min' => $min,
                'max' => $max,
                'pages' => $books->lastPage()
            ]);
        }
        return view('search.index', compact('books', 'min', 'max'));
    }
}
