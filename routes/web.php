<?php


use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/books', 'BookController@index')->name('books.index');
Route::get('/books/{slug}', 'BookController@show')->name('books.show');

Route::get('/contact-us', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::get('/about-us', 'AboutController@index')->name('about.index');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/book/{book}/add-to-cart', 'CartController@add_to_cart')->name('book.add-to.cart');
Route::delete('/book/{book}/remove-to-cart', 'CartController@remove_to_cart')->name('book.remove-to.cart');


Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout/store', 'CheckoutController@store')->name('checkout.store');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');

Route::post('/review/store/{book}', 'ReviewController')->name('review');

Route::post('/favorite/{book}', 'FavoriteController')->name('favorite');

Route::get('/my-account', 'AccountController@index')->name('account.index');
Route::get('/my-account/library', 'AccountController@library')->name('account.library');
Route::get('/my-account/show/{book}', 'AccountController@read')->name('account.book.read');
Route::get('/my-account/my-books', 'AccountController@my_books')->name('account.my_books');
Route::get('/my-account/favorites', 'AccountController@favorites')->name('account.favorites');
Route::get('/my-account/book/create', 'AccountController@add_book')->name('account.add_book');
Route::get('/my-account/book/{book}/edit', 'AccountController@edit')->name('account.book.edit');
Route::post('/my-account/book/store', 'AccountController@store')->name('account.book.store');
Route::put('/my-account/book/update/{book}', 'AccountController@update')->name('account.book.update');
Route::put('/my-account/my-account/update', 'AccountController@update_profile')->name('account.update');

Route::get('/search', 'SearchController')->name('search');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('books/approve/{book}', 'Admin\BookController@approve')->name('book.approve');
});
