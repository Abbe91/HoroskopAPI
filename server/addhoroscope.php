
<?php 

include './horoscopeinformation.php';

session_start();

//kolla om request har redan gjord

if(isset($_SERVER['REQUEST_METHOD'])){

    if($_SERVER['REQUEST_METHOD'] === "POST") {

        // Checking if key 'name' has been set in the request-body.
        if(isset($_POST['date'])) {
           
            // Saving the value of the key 'name' from the request into the key 'personName' in $_SESSION.
        //    $_SESSION["date"] = serialize($_POST["date"]);
        //      echo json_encode($_POST['date']);
           
             getHoroscope($_POST['date']);
            // Sending the saved value back to the client.
            echo json_encode($_POST['date']);
        } else {
           
            // Sending a fault message explaining that the name is not set.
            echo json_encode("name is not set in body");
        }

    }else {
  
        // Sending a fault message explaining that the request-method is not POST.
    
    }

} else {

    // Sending a fault message explaining that this not is a valid request.
    echo json_encode("No valid request");
    }
?>