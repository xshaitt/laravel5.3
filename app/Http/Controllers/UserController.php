<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	return csrf_token();
    }
    public function post()
    {
    	return 'post';
    }
    public function show($id='18')
    {
    	return $id;
    }
}
