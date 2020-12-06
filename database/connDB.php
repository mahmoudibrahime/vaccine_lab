<?php
require_once 'configDB.php';

$conn = mysqli_connect($host, $user, $pass, $DBname);

if(!$conn)
{
    echo(
        '<pclass="alert alert-warning">Error !! DataBase Connection Problem</p>'.mysqli_error($conn)
    );
}
else
{
    echo("<p id='fadeout'><b>You are Connected to Database.</b></p><br>");
}
?>