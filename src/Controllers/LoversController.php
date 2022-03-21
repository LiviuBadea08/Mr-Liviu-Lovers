<?php

namespace App\Controllers;



class LoversController{

    public function __contruct()

    {
        $this->index();
    }

    public function index(){

        $lover = new Lovers;
    }
}