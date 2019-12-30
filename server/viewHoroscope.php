<?php 
session_start();
include './horoscopeinformation.php';


if(isset($_SERVER['REQUEST_METHOD'])){
    if($_SERVER['REQUEST_METHOD'] === "GET"){
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $_SESSION["date"] = unserialize($_SESSION["date"]);
            
            
            echo json_encode($_SESSION['date']);
          
        }  
        
    
        // Checking if key 'name' has been set in the request-body.
        if(isset($_POST['date'])) {
            echo("feeeeel");
        }
           
        //     // Saving the value of the key 'name' from the request into the key 'personName' in $_SESSION.
           //$_SESSION["date"] = serialize($_POST["date"]);
            // echo json_encode($_SESSION['date']);
           
        //      getHoroscope($_POST['date']);
        //     // Sending the saved value back to the client.
        //     echo json_encode($_POST['date']);
        }else {
            echo json_encode("feeeeel");
        }
            

    }else {
  
        // Sending a fault message explaining that the request-method is not POST.
        echo json_encode("feeeeel");
    }



?>
