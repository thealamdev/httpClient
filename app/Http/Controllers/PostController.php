<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
     public function  index(){
        $responses = Http::get('https://visa.guideasy.com/api/v1/server-management/categories');
        $categories = $responses->successful() ? $responses->collect('payload'):[];
        
        return view('post',compact('categories'));
    }  

    public function create(){
        return view('create');
    }
    
    public function view($id){
        $responses = Http::get('https://jsonplaceholder.typicode.com/posts/' .$id);
        return view('single',compact('responses'));
    }

    // public function addpost(Request $request){
    //     $response = Http::post('https://visa.guideasy.com/api/v1/server-management/categories',
    // [
    //         'status'=>'1',
    //         'title'=> [
    //             'id'=>'5',
    //             'title'=>'Shah alam',
    //             'local'=>'local name',
    //         ],
    // ]);
     
        
    // }

    // edit function:
    public function edit($id){
        
        $response = Http::get("https://visa.guideasy.com/api/v1/server-management/categories/". $id . "/edit")->collect('payload');
         
        foreach($response[1]['languages'] as $ln){
            dd($ln['alpha']);
        }
        return view('edit',compact('response'));
    }


    //update post:
    public function update(Request $request, $id){
        $response = Http::put('https://reqres.in/api/users/'.$id,
    [
         'email'=> $request->email,
         'first_name' => $request->first_name,
    ]);
    return view('update',compact('response'));
    }
}
