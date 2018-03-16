<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function add()
    {
    	// echo 'add方法';
    	return view('add');
    }
    public function insert()
    {
    	return redirect()->route('index');
    }

    public function index()
    {
    	echo '列表页';
    }
}
