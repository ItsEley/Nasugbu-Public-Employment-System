<?php
session_start();

if (isset($_SESSION["business_id"]) && $_SESSION["business_id"] === true){

    header("location: ehome.php");
    exit();
}
?>