<?php
$host = 'localhost';
$user ='root';
$pass = '';
$DBname = 'laboratory';
$conn = mysqli_connect($host, $user, $pass, $DBname);

if(!$conn)
{
    echo(
        '<pclass="alert alert-warning">Error !! DataBase Connection Problem</p>'.mysqli_error($conn)
    );
}
else
{
    echo('<p class="alert alert-info">You are Connected to DataBase.</p><br>');
}
?>