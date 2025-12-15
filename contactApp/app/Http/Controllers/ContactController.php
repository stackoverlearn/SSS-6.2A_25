<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;

class ContactController extends Controller
{
    // Return the contacts index view
    function index() {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    // Return the contacts create view
    function create() {
        $companies = Company::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        return view('contacts.create', compact('companies'));
    }

    function show($id) {
        $contact = Contact::find($id);
        return view('contacts.show', compact('contact'));
    }

    function store(Request $request) {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'company_id'=>'required|exists:companies,id'
        ]);
        // dd($request->all());
        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('message', 'Contact has been added successfully!');
    }
}