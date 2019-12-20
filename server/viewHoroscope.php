<?php 
session_start();
include './horoscopeinformation.php';

if(isset($_SERVER['REQUEST_METHOD'])){
    if($_SERVER['REQUEST_METHOD'] === "GET"){
        // Checking if key 'name' has been found then wite it on my site and sesseion.
        if(isset($_SEESION['date'])){
            // Saving the value of the key 'name' from the request into the key 'personName' in $_SESSION.
            $key = $_SESSION["key"];


            echo json_encode($key);
        } 
        }else{
            echo json_encode("name is not in the body");
        }
    }



?>
