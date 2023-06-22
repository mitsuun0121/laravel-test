<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {

        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only('fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'option');
        $request->session()->put('contact', $request->all());
        

        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only('fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'option');
        $request->session()->forget('contact');
        Contact::create($contact);

        return view('thanks');
    }

    public function add()
    {

        return view('management');
    }

    public function create(ContactRequest $request)
    {
        $contact = $request->only('fullname', 'gender', 'email', 'option');
        
        return redirect('management', compact('contact'));
    }

    public function search(ContactRequest $request)
    {
        $contact = Contact::with('contact')->KeywordSearch($request->keyword)->get();
        

        return redirect('management', compact('contact'));
    }
}
