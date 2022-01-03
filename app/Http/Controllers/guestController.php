<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SayhelloController;

class guestController extends Controller
{
    public function addNewGuest()
    {
        return view('guestbook');
    }

    public function seve()
    {
        
    }
}
