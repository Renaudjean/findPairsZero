<?php 
try{
    $DB = new PDO('mysql:host=localhost;dbname=memorygame;charset=utf8', 'root');

}catch(Exception $e){
    echo'Erreur : '. $e->getMessage();
}