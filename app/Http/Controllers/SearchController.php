<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Show query form.
     *
     * @return \Illuminate\Contacts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
}
