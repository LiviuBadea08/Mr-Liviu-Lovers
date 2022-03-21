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
}
?>