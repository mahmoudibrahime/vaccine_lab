<?php

include 'connDB.php';
/*
$host = 'localhost';
$user ='root';
$pass = '';
$DBname = 'alahram';
$conn = mysqli_connect($host, $user, $pass, $DBname);

if(!$conn)
{echo('Error !! DataBase Connection Problem'.mysqli_error($conn));}
else
{
    echo('You are Connected to DataBase.<br>');
}
*/
if(isset($_POST['savetodb'])){
   
    $name = $_POST['name'];
    $age = $_POST['age'];
    $dept = $_POST['dept'];
   
$sql = "INSERT INTO authors(name, age, department )VALUES('$name', '$age', '$dept')";

if(mysqli_query($conn, $sql)){
    echo " New Row is inserted ";
}
else
{echo" Nothing was done".mysqli_error($conn);}

mysqli_close($conn);
}

?>