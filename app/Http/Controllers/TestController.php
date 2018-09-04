<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(A $a){
        //dd($a);
        $a->aa();
        echo __METHOD__;
        dd($this);
    }
    public function addUser(){
        $user = new User();
        //$user->user_name="imwz";
        $user->user_pass = encrypt('admin');
        try{
            $user->save();
        }catch (\Exception $e)
        {
            echo $e->getMessage();
        }
    }
}
class A{
    private $b;
    public function __construct(B $b)
    {
        $this->b=$b;
        echo __CLASS__." init<br/>";
    }

    private $a=1;
    public function aa(){
        echo __METHOD__."<br/>";
    }
}
class B{
    public function __construct()
    {
        echo __CLASS__." init<br/>";
    }
}
