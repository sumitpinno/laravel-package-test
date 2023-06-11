<?php

namespace Innofied\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Innofied\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index(){
      $contactList = Contact::get();
      return view("contact::contact", compact('contactList'));
    }

    public function store(Request $request){
      Contact::create($request->all());
      return redirect("contact");
    }
}
