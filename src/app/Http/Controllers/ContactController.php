<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest; 


class ContactController extends Controller
{
    
    public function form()
    {
         $heading = 'FashionablyLate';
        return view('form',compact('heading'));
    }
       public function confirm(ContactRequest $request)
    {
        $contact = $request->validated([ 'category_id','first_name','last_name','gender','email','tel','address','building','detail',]);
        return view('contact.confirm', ['data' => $request->all()]);
    } 
    public function store(ContactRequest $request) 
    {
         $validatedData = $request->validated([ 'category_id','first_name','last_name','gender','email','tel','address','building','detail',]);
         Contact::create($validatedData);
         return view('thanks');
    }

}
