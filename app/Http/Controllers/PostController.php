<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function  index(){
        $responses = Http::get('https://jsonplaceholder.typicode.com/posts');
        $response = $responses->collect();
        return view('post',compact('response'));
    }   
}
