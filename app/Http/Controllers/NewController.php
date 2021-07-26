<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        return view('admin.new.index');
    }

    public function create()
    {
        return view('admin.new.add');
    }

    public function store(Request $request)
    {   
        
    }

    public function edit(){

    }


    public function delete(){

    }
}
