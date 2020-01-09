
<?php 

session_start();
include './horoscopeinformation.php';



//kolla om request har redan gjord

if(isset($_SERVER['REQUEST_METHOD'])){

    if($_SERVER['REQUEST_METHOD'] === "POST") {

        // Checking if key 'name' has been set in the request-body.
        if(isset($_POST['date'])) {
           
            if(!isset($_SESSION["horoscope"])) {
                // Horoskop finns sparat i session, returnera false
                $horsocope = getHoroscope($_POST['date']);
                $_SESSION["horoscope"] = serialize($horsocope);
                echo json_encode(true);
            } else {
                // Horoskop finns inte sparat i session, spara nytt horoskop och returnera true
                echo json_encode(false);
            }

        } else {
            echo json_encode("please write your date");
        }

    }else {
  
        // Sending a fault message explaining that the request-method is not POST.
    
    }

} else {

    // Sending a fault message explaining that this not is a valid request.
    echo json_encode("No valid request");
}
?>