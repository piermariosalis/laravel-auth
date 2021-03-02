<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
  
        public function index()
        {
            $articles = Article::all();
            return view('guests.index', compact('articles'));
        }
            public function about()
        {
            return view ('guests.index');
        }      
        
        public function contacts()
        {
            return view ('guests.index');
        }       
}