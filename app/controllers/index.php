<?php

require_once('app/model/index.php');

class ModelControler{
    Private $Model;

    function __construct(){
        $this-> ModelDatabase = new ModelDataBase();
    }

    //Mostar
    static function Index(){
        require_once('app/views/home/index.php');
    }
}