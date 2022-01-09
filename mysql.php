<?php 

echo "HIII";

$server = "localhost";
$user = "root";
$pass = "";

$conn = mysqli_connect($server, $user, $pass);

if($conn)
echo "success!";

?>