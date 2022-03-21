<?php

namespace App\Models;

use App\Database;

class Lovers{
    
    private int $id; 
    private string $people;
    private string $type;
    private string $activity;
    private string $date_time;

    private $database;
    private $table= 'citas';
    public function __construct(){
        if (!$this->database ) {
            $this->database= new Database;

        }

      

    }
     
    public function all(){

        $query = $this->database->mysql->query("select * from {$this->table}");
        $lovers_array = $query->fetchAll();

        $result_array=[];

        foreach ($lovers_array as $lovers) {
            $lover_item = new Lovers($lovers ["id"], $lovers["people"],$lovers["type"],$lovers["activity"],$lovers["database"]);
            array_push($result_array,$lover_item);

            


        }

        return $result_array;

    } 




}