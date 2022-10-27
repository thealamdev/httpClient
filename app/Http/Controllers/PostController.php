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
    
    public function view($id){
        $responses = Http::get('https://jsonplaceholder.typicode.com/posts/' .$id);
        return view('single',compact('responses'));
    }

    public function addpost(){
        $response = Http::post('https://reqres.in/api/users',
        [
            "name" => "Shah  Alam",
            "job" => "web developer",
        ]
    );
    return view('create',compact('response'));
    }



    //update post:
    public function update($id){
        $response = Http::put('https://reqres.in/api/users/'.$id,
    [
        "name" =>"alam",
        "job" =>"software enginner",
    ]);
    return view('update',compact('response'));
    }
}
