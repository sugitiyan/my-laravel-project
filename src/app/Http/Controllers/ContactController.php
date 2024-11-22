<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact_form()
  {
    $heading = 'お問い合わせフォーム'; 
        
        // $headingをビューに渡す
    return view('contact_form', compact('heading'));
  }

    public function confirm(ContactRequest $request)
     {
         $contact = $request->only(['last_name','first_name','gender','email','phone','address','building','inquiry_type','inquiry_content']);
          return view('contact_confirm',['contact' => $contact]);
     }
    
    
     public function store(ContactRequest $request)
     {
         $contact = $request->only(['last_name','first_name','gender','email','phone','address','building','inquiry_type','inquiry_content']);
         Contact::create($contact);

         return view('thanks');
     }
}
