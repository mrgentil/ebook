<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Http\Controllers\Controller;
use App\Traits\Actionnable;

class BookController extends Controller
{
    use Actionnable;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function approve(Book $book)
    {
        if (!$this->canEdit('edit_books')) {
            return redirect()->back()->with($this->hasNoPermissionErrorMessage($this->errorMessage()));
        }

        $approved = $book->active;
        $message = $approved == 'active' ? 'Livre désapprouvé avec succès' : 'Livre approuvé avec succès';

        $book->update([
            'active' => $approved == 'active' ? 'disabled' : 'active'
        ]);

        return redirect()->route('voyager.books.index')->with($this->setFlash($message));
    }
}
