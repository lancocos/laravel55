<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-09-03
 * Time: 15:14
 */

namespace App\Models\Observes;
use App\Models\User;


class UserObserve
{
    public  function creating(User $user){
        echo "<pre>";
        print_r($user);
        echo "<pre/>";
        echo "creating";
        return true;
    }
    public  function created(User $user){
        echo "created";
    }
    public  function updating(){
        echo "updating";
    }
    public  function updated(){
        echo "updated";
    }
    public  function saving(){
        echo "saving";
    }
    public  function saved(){
        echo "saved";
    }
    public  function deleting(){
        echo "deleting";
    }
    public  function deleted(){
        echo "deleted";
    }
    public  function restoring(){
        echo "restoring";
    }
    public  function restored(){
        echo "restored";
    }
}