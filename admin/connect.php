<?php
$host = "localhost";
$user = "root";
$password ="";
$database ="emg";
$mycon =mysqli_connect($host,$user,$password,$database);

if($mycon)
{
    // echo "true";
}
else
{
    echo "error".mysqli_error($mycon);
}