<?php


namespace App\Repository;


use App\Book;

class CartRepository
{

    public function add(Book $book)
    {
        \Cart::session(auth()->user()->id)->add(array(
            'id' => uniqid(),
            'name' => $book->title,
            'slug' => $book->slug,
            'price' => empty($book->cost) && $book->status === 'GRATUIT' ? 'Gratuit' : $book->cost,
            'quantity' => 1,
            'attributes' => array(
                'id' => $book->id,
                'file' => $book->file,
                'slug_link' => $book->slug_link,
            ),
            'associatedModel' => $book
        ));
    }
}
