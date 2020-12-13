<?php
include ('../template/template.php');
require ('configDB.php');
// require ('connDB.php');
?>
<?php
$conn = mysqli_connect($host, $user, $pass, $DBname)
or die("Error!, unable to connect database.");

if (isset( $_POST['subnewsletter']))
{
$mailfrom = $_POST['mailnewsletter'];
if($mailfrom == '')
{
    echo("Please go back, and reenter right email.");
    // header('location:../index.html');
}
else
{
$sqlnewsletter = "INSERT INTO newsletter(mailfrom) VALUES ('$mailfrom')";

if (mysqli_query($conn, $sqlnewsletter)){
    echo "<br><p>Thanks, for subscribe to Vaccine lab newsletter.</p>";
}
else 
{  
    echo"Erorr! DataBase, Employer already registered".mysqli_error($conn);
}
}
}
mysqli_close($conn);
?>