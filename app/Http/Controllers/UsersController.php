<?php

namespace App\Http\Controllers;


use App\Repositories\RepositoryInterface;

class UsersController extends Controller
{

    protected  $user;
    public function __construct(RepositoryInterface $user)
    {
        echo __METHOD__;
        $this->user = $user;
    }

    public function index(){
        $users = $this->user->all();
        dd($users);

    }

}
