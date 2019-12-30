<?php
session_start();

include './horoscopeinformation.php';
if(isset($_SERVER['REQUEST_METHOD'])) {
    if($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    if(isset($_SESSION['date'])){
        $_SESSION['date'] = null;
        session_unset();
        
        echo "true";
    } else{
        echo "false";
    }  
}
}
?>