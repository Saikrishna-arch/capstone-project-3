<?php
$connection = mysqli_connect('localhost','root','','capstoneproject3');

$phoneoremail = $_POST['phoneoremail'];
$password = $_POST['password'];

$check_data = mysqli_query($connection,"SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail' and password = '$password'");
$check = mysqli_num_rows($check_data);

if($check > 0){
echo "Log In Successful";
}
else{
echo "Log In Failed";
}
?>


