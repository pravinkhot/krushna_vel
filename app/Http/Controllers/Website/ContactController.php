<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('website.contact_us');
    }

    public function saveContact(Request $request)
    {
        
    }
}
