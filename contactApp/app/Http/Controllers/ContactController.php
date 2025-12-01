<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Return the contacts index view
    function index() {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    // Return the contacts create view
    function create() {
        return view('contacts.create');
    }

    function show($id) {
        $contact = Contact::find($id);
        return view('contacts.show', compact('contact'));
    }
}