<?php

namespace App\Controllers;

use App\Models\Lovers;
use App\Core\Views;

class LoversController{

    public function __construct()
    {
        $this->index();
    }

    public function index(){
        
        $lover = new Lovers();
        $lovers = $lover->all();

        new Views("LoversList", ["lover"=> $lovers]);
    }

}
?>