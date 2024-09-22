<?php
include_once "./controller/ControllerMH.php";

if(isset($_GET["action"])){
    $action = $_GET["action"];
    switch( $action){
        case "login":
            logine();
            break;
            
        case "sign_up":
            sign_up();
        break;

    }
}

?>