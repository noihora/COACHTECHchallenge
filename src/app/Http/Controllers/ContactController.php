<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
  {
    return view('index');
  }
  public function confirm(ContactRequest $a)
  {
    $b = $a->only(['name','sex','email','postal-code','address','city','content']);
    return view('confirm', ['b' => $b]);
  }
  public function store(ContactRequest $request)
{
    $contact= $request->only(['name','sex','email','postal-code','address','city','content']);
    Contact::create($contact);
    return view('thanks');
}
}
