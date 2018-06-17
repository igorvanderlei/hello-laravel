<?php

namespace teste\Http\Controllers;

use Illuminate\Http\Request;

class Hello extends Controller
{
    public function sayHello($nome='') {
   	 return view('hello', ['nome' => $nome]);
	}
}
