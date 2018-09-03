<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-09-03
 * Time: 15:14
 */

namespace App\Models\Observes;


class UserObserve
{
    public  function creating(){
        echo "creating";
        return false;
    }
    public  function created(){
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