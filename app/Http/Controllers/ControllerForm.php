<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerForm extends Controller
{
    function print(Request $request){
        return view('contactus', compact('request'));
        }
        public function validateform(Request $request) {
        $this->validate($request,[
        'email'=>'required|min:8', // validation rules
        'name'=>'required|max:15',
        'subject'=>'required',
        'content'=>'required',
        ]);
        // If the validation rules pass, your code will keep executing normally:
        return view('contactus', compact('request'));
        }
}
