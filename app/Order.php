<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['first_name', 'last_name',
        'company_name', 'email', 'phone', 'address', 'city', 'user_id', 'comment', 'book_id', 'active'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
