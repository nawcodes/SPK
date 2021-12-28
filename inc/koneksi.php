<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "spk_old";
$conn = mysqli_connect($server, $username, $password, $database);
if($conn->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); die;
}
?>