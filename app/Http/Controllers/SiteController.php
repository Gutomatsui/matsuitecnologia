<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('home.index', ['title' =>'']);
    }
    public function sobre(){
        return view('sobre.index', ['title' => 'sobre']);
    }

    public function contato(){
        return view('contato.index',['title' => 'contato']);
    }
}
