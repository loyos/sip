<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {

        $name = 'Loyos';
        $people = [
            'Loy Ramirez', 'Pedro Perez', 'Menganito suchusfreco'
        ];




        return view('pages.about', compact('people','name'));

    }

}