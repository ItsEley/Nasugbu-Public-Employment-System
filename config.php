<?php
def('dbserver','localhost');
def('dbusername','root');
def('dbpassword','');
def('dbname','db_employment');

$db = mysqli_connect(dbserver,dbusername,dbpassword,dbname);

if($db === false){

    die("Error:connection error. ".mysqli_connect_error());
}
?>