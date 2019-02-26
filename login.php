<?php

$username = filter_input(INPUT_POST, "username");
$password = filter_input(INPUT_POST, "password");


$mysqli = new mysqli("localhost","root","","androidphp");

$result = mysqli_query($mysqli,"select * from user where username = '".$username."'and password = '".$password."'");

if ($data = mysqli_fetch_array($result)){
    echo '1';
}



?>




















