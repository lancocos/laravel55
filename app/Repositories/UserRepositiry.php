<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-09-17
 * Time: 14:24
 */

namespace App\Repositories;


use App\Models\User;

class UserRepositiry implements RepositoryInterface
{

    public function all($columns = ['*'])
    {
        return User::all();
    }



    public function find($id, $columns = array('*'))
    {
        return User::find($id);
    }


}