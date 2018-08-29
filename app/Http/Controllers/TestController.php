<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

    }
    public function addUser(){
        $user = new User();
        //$user->user_name="imwz";
        $user->user_pass = encrypt('admin');
        try
        if($user->save()){
            echo "ok";
        }else{
            echo "error";
        }
    }
}
