<?php

namespace App\Http\Controllers;


use App\Repositories\RepositoryInterface;

class UsersController extends Controller
{

    protected  $user;
    public function __construct(RepositoryInterface $user)
    {

        $this->user = $user;
    }

    public function index(){
        //https://www.cnblogs.com/lyzg/p/6181055.html
        //http://www.ihref.com/read-16369.html
        $app = App();

        $users = $this->user->all();
        dd($users);

    }

}
