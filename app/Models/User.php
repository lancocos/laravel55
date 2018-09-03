<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Observes\UserObserve;

class User extends Model
{
    protected $table = 'USERS';
    protected $primaryKey = 'USER_ID';
    //

    public static function boot(){
        parent::boot();

        User::observe(new UserObserve);
    }
    public function save1(Array $options=[]){
        $this->createRules();
        echo 11;
        return false;
    }

    public function createRules(){
        print_r(self::getAttributes());
        return
            [
                ''
            ];
    }
}
