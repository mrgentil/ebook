<?php


namespace App\Repository;


use App\Book;

class ReviewRepository
{
    /**
     * @param Book $book
     * @param string $body
     * @param int $rate
     * @return mixed
     */
    public function store(Book $book, string $body, int $rate)
    {
        $user = auth()->user();

        return $book->rating([
            'title' => 'ZamengApp',
            'body' => $body,
            'customer_service_rating' => 0,
            'quality_rating' => 0,
            'friendly_rating' => 0,
            'pricing_rating' => 0,
            'rating' => $rate,
            'recommend' => 'Yes',
            'approved' => true
        ], $user);
    }
}
