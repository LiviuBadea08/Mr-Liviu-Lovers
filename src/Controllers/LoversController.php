<?php

namespace App\Controllers;

use App\Models\Lovers;
use App\Core\Views;

class LoversController{

    public function __construct()
    {
        if (isset($_GET["action"]) && ($_GET["action"] == "delete")){
            $this->delete($_GET["id"]);
            return;
        }
        $this->index();

    }

    public function index(){
        
        $lover = new Lovers();
        $lovers = $lover->all();
        
        new Views("LoversList", ["lover"=> $lovers]);
    }

    public function delete($id){
        $loverHelper = new Lovers();
        $lover = $loverHelper->findById($id);
        $lover->delete();

        $this->index();
    }



}

?>