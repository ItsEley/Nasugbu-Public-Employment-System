<?php
define('dbserver','localhost');
define('dbusername','root');
define('dbpassword','');
define('dbname','db_employment');

$db = mysqli_connect(dbserver,dbusername,dbpassword,dbname);

if($db === false){

    die("Error:connection error. ".mysqli_connect_error());
}
?>