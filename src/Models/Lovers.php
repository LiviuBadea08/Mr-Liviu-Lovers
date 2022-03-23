<?php

namespace App\Models;

use App\Database;

class Lovers{
    
    private ?int $id; 
    private string $people;
    private string $type;
    private string $activity;
    private string $date_time;

    private $database;
    private $table = 'citas';

    public function __construct(int $id = null, string $people = '', string $type = '', string $activity = '', string $date_time = ''){
        if (!$this->database) {
            $this->database= new Database;
        }

        $this->id = $id;
        $this->people = $people;
        $this->type = $type;
        $this->activity = $activity;
        $this->date_time = $date_time;
    }
    
    public function all(){

        $query = $this->database->mysql->query("select * from {$this->table}");
        $lovers_array = $query->fetchAll();

        $result_array=[];

        foreach ($lovers_array as $lovers) {
            $lover_item = new Lovers($lovers["id"], $lovers["people"], $lovers["type"], $lovers["activity"], $lovers["date_time"]);
            array_push($result_array, $lover_item);
        }

        return $result_array;
    } 
    public function get_id(){
        return $this->id;
    }
    public function get_people(){
        return $this->people;
    }
    public function get_type(){
        return $this->type;
    }
    public function get_activity(){
        return $this->activity;
    }
    public function get_date_time(){
        return $this->date_time;
    }

    public function findById($id){
        $query = $this->database->mysql->query("select * from {$this->table} where id={$id}");
        $result = $query->fetchAll();
        $lover = new Lovers($result[0]["id"], $result[0]["people"], $result[0]["type"], $result[0]["activity"], $result[0]["date_time"]);


        return $lover;
    }

    public function delete(){
        $this->database->mysql->query("delete from {$this->table} where `{$this->table}`.`id`={$this->id}");
    }

    public function save(){
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`people`, `type`, `activity`) VALUES ('$this->people', '$this->type', '$this->activity')");
    }
    
    public function rename($people, $type, $activity){
        $this->people = $people;
        $this->type = $type;
        $this->activity = $activity;
    }


    public function update(){
        $this->database->mysql->query("UPDATE `{$this->table}` SET `people`='$this->people',`type`='$this->type',`activity`='$this->activity' WHERE `id` = $this->id");
    }
    // TO DO: UPDATE

    // UPDATE `citas` SET `people`='[value-2]',`type`='[value-3]',`activity`='[value-4]' WHERE `id` = id

}
?>