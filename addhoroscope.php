<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="javascript.js"></script>
    <title>Document</title>
</head>
<body>
    <p id="statusText"></p>
    <input type="text" id="createTextbox">
    <button id="createBtn">Creat new horoscope</button>

<?php 
    function error($msg){
        $response = array("success" => false, "message" => $msg);
        return json_encode($response);
    }
    $name = $_POST['name'];
    if ($name == ''){
        die(error('Error No name'));

    }
    // $name = "kenneth";

    $message = "created " . $name;
    $response = array();
    $response["success"] = true;
    $response["message"] = $message;

    echo json_encode($response);
    ?>










</body>
</html>

