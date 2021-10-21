<?php

namespace App\Http\Controllers;

use App\Helpers\Pageable;
use App\Http\Requests\ContactRequest;
use App\Repository\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    use Pageable;

    public function index()
    {
        $page = $this->getPageInfo('contact');
        return view('contact.index', compact('page'));
    }

    public function store(ContactRequest $request, ContactRepository $contactRepository)
    {
        $contactRepository->store(
            $request->name, $request->email, $request->phone,
            $request->subject, $request->message
        );

        if($request->ajax()){
            return response()->json('Message envoyé');
        }
        flash('Message envoyé avec succès');
        return redirect()->back();
    }
}
