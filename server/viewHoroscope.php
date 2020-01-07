<?php 
session_start();
include './horoscopeinformation.php';
if(isset($_SERVER['REQUEST_METHOD'])){
    if($_SERVER['REQUEST_METHOD'] === "GET"){

        if(!isset($_SESSION["horoscope"])) {
            // Echo horoscope from session

            echo json_encode(unserialize($_SESSION["horsocope"]));
            exit;
        } else {
            // Echo false
            
            echo json_encode(false);
            exit;
        }
            
    } else {
  
        // Sending a fault message explaining that the request-method is not POST.
        echo json_encode("feeeeel");
        exit;
    }
}

?>