<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookRequest;
use App\Http\Requests\ProfileRequest;
use App\Order;
use App\Repository\BookRepository;
use App\Repository\OrderRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use TCG\Voyager\Models\Category;

class AccountController extends Controller
{
    /**
     * @var OrderRepository
     */
    private $orderRepository;
    /**
     * @var BookRepository
     */
    private $bookRepository;

    /**
     * AccountController constructor.
     * @param OrderRepository $orderRepository
     * @param BookRepository $bookRepository
     */
    public function __construct(OrderRepository $orderRepository, BookRepository $bookRepository)
    {
        $this->middleware('auth');
        $this->orderRepository = $orderRepository;
        $this->bookRepository = $bookRepository;
    }

    public function index()
    {
        $orders = $this->orderRepository->getUserOrders();
        $books = $this->bookRepository->getUsersBooks();
        $favorites = \auth()->user()->favorite(Book::class);
        return view('account.index', compact('orders', 'books', 'favorites'));
    }
    public function library()
    {
        $orders = $this->orderRepository->getUserOrders();
        $books = $this->bookRepository->getUsersBooks();
        $favorites = \auth()->user()->favorite(Book::class);

        return view('account.library', compact('orders', 'books', 'favorites'));
    }

    public function read(Book $book)
    {
        Order::query()->where('book_id', $book->id)
            ->where('user_id', \auth()->user()->id)->firstOrFail();
        $orders = $this->orderRepository->getUserOrders();
        $books = $this->bookRepository->getUsersBooks();
        $favorites = \auth()->user()->favorite(Book::class);
        return view('account.read', compact('book', 'orders', 'books', 'favorites'));
    }

    public function my_books()
    {
        $orders = $this->orderRepository->getUserOrders();
        $books = $this->bookRepository->getUsersBooks();
        $favorites = \auth()->user()->favorite(Book::class);
        return view('account.books', compact( 'orders', 'books', 'favorites'));
    }

    public function add_book()
    {
        $orders = $this->orderRepository->getUserOrders();
        $books = $this->bookRepository->getUsersBooks();
        $categories = Category::query()->orderBy('name')
            ->where('order', 3)->get();
        $favorites = \auth()->user()->favorite(Book::class);
        return view('account.create', compact( 'orders', 'books', 'categories', 'favorites'));
    }
    public function favorites()
    {
        $orders = $this->orderRepository->getUserOrders();
        $books = $this->bookRepository->getUsersBooks();
        $favorites = \auth()->user()->favorite(Book::class);
        return view('account.favorite', compact( 'orders', 'books', 'favorites'));
    }

    public function store(BookRequest $request)
    {
        $this->bookRepository->store($request);

        flash('le livre est ajouté avec succès. Mais il doit être validé par l\'administration avant sa publication');
        return redirect()->back();
    }

    public function edit(Book $book)
    {
        $orders = $this->orderRepository->getUserOrders();
        $books = $this->bookRepository->getUsersBooks();
        $categories = Category::query()->orderBy('name')
            ->where('order', 3)->get();
        $favorites = \auth()->user()->favorite(Book::class);
        return view('account.edit-book', compact('book', 'orders', 'books', 'categories', 'favorites'));
    }

    public function update(BookRequest $request, Book $book)
    {
        $this->bookRepository->update($book->id, $request);
        flash('Le livre a été mis à jour avec succès.');
        return redirect()->back();
    }

    public function update_profile(ProfileRequest $request)
    {
        $query = User::query()->where('id', auth()->user()->id);
        $query->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        if($request->password){
            $query->update([
                'password' => Hash::make( $request->password)
            ]);
            Auth::guard()->logout();
            flash('Profil mis à jour avec succès. Veuillez vous reconnecter');
            return redirect()->route('login');
        }

        flash('Profil mis à jour avec succès');
        return redirect()->back();

    }
}
