<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class guestcontroller extends Controller
{
    public function add()
    {
        return view('guestAdd');
    }

    public function save(Request $request)
    {
        $user=new users;
        $user-> name=$request->name;
        $user-> secoundName=$request->secoundName;
        $user-> wishes=$request->wishes;
        $user->save();
        return redirect('thankyou');


    }
}
