<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //
    function index(Request $req)
    {
        $contact= new Contact;
        $contact->name=$req->name;
        $contact->email=$req->email;
        $contact->mobile=$req->mobile;
        $contact->message=$req->message;
        $contact->save();
        return redirect('/');
       
    }



}
