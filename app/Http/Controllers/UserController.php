<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id){
        $data=array(
        "id"=>$id,
        "name"=>"Mark David Namata",
        "age"=>21,
        "email"=>"markdavidnamata03@gmail.com"
         );
         return view('user', $data);
        
    }
    
}
  

