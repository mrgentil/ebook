<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function __invoke(Book $book)
    {
        if ($book->isFavorited()) {
            $book->removeFavorite();
        } else {
            $book->addFavorite();
        }
        return redirect()->back();
    }
}
