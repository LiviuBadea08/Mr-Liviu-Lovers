<?php 


namespace App\Core; 

class Views {

    public function __construct( string $View, array $data = []){
        require_once("src/Views/$View.php");
    }
}
?>