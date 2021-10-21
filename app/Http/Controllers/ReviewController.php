<?php

namespace App\Http\Controllers;

use App\Book;
use App\Repository\ReviewRepository;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Book $book, ReviewRepository $reviewRepository, Request $request)
    {
        $reviewRepository->store($book, $request->body, $request->rating);
        flash('Avis ajouté avec succès')->success();

        return redirect()->to(url()->previous() . '#respond');
    }
}
