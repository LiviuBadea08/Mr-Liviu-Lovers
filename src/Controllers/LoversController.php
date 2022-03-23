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
        if (isset($_GET["action"]) && ($_GET["action"] == "create")){
            $this->create();
            return;
        }
        if (isset($_GET["action"]) && ($_GET["action"] == "store")){
            $this->store($_POST);
            return;
        }

        if(isset($_GET["action"]) && ($_GET["action"]== "edit")){
            $this->edit($_GET["id"]);
            return;
        }

        if(isset($_GET["action"]) && ($_GET["action"]== "update")){
            $this->update($_POST, $_GET["id"]);
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

    public function create(){
        new Views("addLover");
    }

    public function store(array $request){
        $lover = new Lovers(null, $request["people"],  $request["type"], $request["activity"]);
        $lover->save();

        $this->index();
        
    }

    public function edit ($id){
        $loverHelper = new Lovers();
        $lover = $loverHelper->findById($id);
        new Views ("editLovers", ["lover"=>$lover]);
    }

    public function update (array $request, $id){
        $loverHelper = new Lovers();
        $lover = $loverHelper->findById($id);
        $lover->rename($request["people"], $request["type"], $request["activity"]);
        $lover->update();

        $this->index();
    }
}


?>