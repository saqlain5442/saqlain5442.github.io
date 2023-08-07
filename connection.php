<?php

$server = "localhost";
$dbname = "mdent";
$username = "root";
$password = "";



$conn = mysqli_connect($server, $username, $password, $dbname);


$msg = "";

//===============================================================================================
//============== query for Complaint=================

if (isset($_POST['saveWeb'])) {
    $wName = $_POST['wName'];
    $wEmail = $_POST['wEmail'];
    $wNumber = $_POST['wNumber'];
    $wDescription = $_POST['wDescription'];

    $countrySql = "INSERT INTO `webinq` (`id`, `wName`,`wEmail`,`wNumber`,`wDescription`) VALUES (NULL, '$wName','$wEmail','$wNumber','$wDescription')";

    if (mysqli_query($conn, $countrySql))
        header("Location: index.php");
    else
        $msg = "error not working";
}
//===============================================================================================
