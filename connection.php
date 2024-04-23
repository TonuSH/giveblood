<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = "giveblood";
$conn = new mysqli ($hostname, $username, $password, $database);
if($conn->connect_error) {
    echo $conn->connect_error;
}
// else{
// echo "Connected!";
// }
?>