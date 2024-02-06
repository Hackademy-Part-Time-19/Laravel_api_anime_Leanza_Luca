<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{

    public function homepage(){
        return view('homepage');
    }
    
    public function index(){
        $response = Http::get('https://api.jikan.moe/v4/genres/anime')->json()['data'];
      
        return view('anime', ['response' => $response]);
    }

    public function show($id){

        
        $response = Http::get('https://api.jikan.moe/v4/anime/'.$id)->json()['data'];
      
        return view('anime-show', ['anime' => $response]);
    }
    
}
