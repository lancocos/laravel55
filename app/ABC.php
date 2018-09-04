<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-09-04
 * Time: 10:46
 */

namespace App;


class ABC
{
    public function __construct()
    {
        echo __CLASS__."=>".__METHOD__."<br>";
    }
    public function printRequest($req){
        echo 111;
        echo "<pre>";
        print_r($req);
        echo "</pre>";
    }
}