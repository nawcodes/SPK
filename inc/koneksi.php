<?php
// $server = "sql210.epizy.com";
// $username = "epiz_30666189";
// $password = "mijOCiLKSfoFI1";
// $database = "epiz_30666189_spk_old";
// $conn = mysqli_connect($server, $username, $password, $database);
// if($conn->connect_errno) {
//     printf("Connect failed: %s\n", $mysqli->connect_error); die;
// }


$server = "localhost";
$username = "root";
$password = "";
$database = "spk_old";
$conn = mysqli_connect($server, $username, $password, $database);
if($conn->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); die;
}
?>