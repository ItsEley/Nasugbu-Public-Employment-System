<?php
session_start();

if (isset($_SESSION["userId"]) && $_SESSION["userId"] === true){

    header("location: home.php");
    exit();
}
?>