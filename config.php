<?php 

$serverName = "localhost";
$user = "root";

$dbName = "enroll_system";

$conn = mysqli_connect($serverName, $user, "", $dbName);

if(!$conn) { 

    echo "TITE";
    exit();

}

?>