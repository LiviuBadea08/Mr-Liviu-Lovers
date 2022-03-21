<?php

namespace App\Controllers;

use App\Models\Lovers;

class LoversController{

    public function __contruct()

    {
        $this->index();
    }

    public function index(){

        $lover = new Lovers;
    }
}