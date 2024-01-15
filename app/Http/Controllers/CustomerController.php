<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function display()
    {
        return view('exercise/form');
    }

    public function store(Request $request)
    {

        
        $file = $request->file('file');
        //dd($file);

        $fileName = $file->getClientOriginalName();
      //  dd($fileName);

      $file->storeAs('public/attachments',$fileName);

    }
    
}
