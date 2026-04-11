<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnController extends Controller
{
    public function front(){

    return view('portfolio.front');
    }

  public function projects(){
   
    return view('portfolio.projects');
}

public function skills(){

return view('portfolio.skills');
}

public function abouts(){

return view('portfolio.abouts');
}

public function contacts(){

return view('portfolio.contacts');
}
}
