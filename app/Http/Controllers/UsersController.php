<?php

namespace App\Http\Controllers;


use App\Repositories\RepositoryInterface;
use Illuminate\Support\Facades\App;

class UsersController extends Controller
{

    protected  $user;
    public function __construct(RepositoryInterface $user)
    {

        $this->user = $user;
    }

    public function index(){
        //https://www.cnblogs.com/lyzg/p/6181055.html
        $app = App();
        dd($app);
        $users = $this->user->all();
        dd($users);

    }

}
