<?php

//https://www.cnblogs.com/Stone--world/p/4756043.html
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-09-17
 * Time: 14:12
 */

namespace App\Repositories;


interface RepositoryInterface
{
    public function all($columns=['*']);
    public function find($id, $columns = array('*'));


}