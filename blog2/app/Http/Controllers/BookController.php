<?php

namespace App\Http\Controllers;
use App\Http\Requests\BookForm;

use Illuminate\Http\Request;

class BookController extends Controller
{


	public function create()
{
	return view("books.add");
}
}
