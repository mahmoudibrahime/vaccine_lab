<?php
$host = 'localhost';
$user ='root';
$pass = '';
$DBname = 'alahram';
$conn = mysqli_connect($host, $user, $pass, $DBname);

if(!$conn)
{
    echo('Error !! DataBase Connection Problem'.mysqli_error($conn));
}
else
{
    echo('You are Connected to DataBase.<br>');
}
?>