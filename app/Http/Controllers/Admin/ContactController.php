<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
//
//    protected $request;
//    public  function  __construct(Request $request)
//    {
//        $this->request = $request;
//    }

    public function show(Request $request, $id = false)
    {
//        print_r($request->all());
         echo    $request->input('userName');
         echo    $request->path();

        return view('layouts.contact');

    }
}
