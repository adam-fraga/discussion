<?php
//LAUNCH database

$host = 'localhost';
$user = 'root';
$password = '';

$discussion = mysqli_connect($host,$user,$password,'discussion');

if (!$discussion)
{
    echo "Error";
    die("Error\:".mysqli_connect_error() );
}

echo "<pre>";
print_r($discussion);
echo "</pre>";

//CLOSE DB

