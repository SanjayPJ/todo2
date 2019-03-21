<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class PagesController extends Controller
{
    public function index(){
    	$todos = Todo::all();
    	return view('welcome')->with('todos', $todos);
    } 
}
