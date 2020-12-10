<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Form | employee</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9QCNsE7Xt5PId0HuaN08NcYZWz0TfWwxZyg&usqp=CAU">
  </head>
  <body>
<?php
 include 'headpage.php';
 require 'connDB.php';
 ?>
 <div class="container">
<?php
  if(isset($_POST['btn-login']))
{
  $name = $_POST['name'];
  $password = $_POST['password'];
  
  if ($name=='' || $password=='')
  {
    echo"<P class='alert alert-info'>go back and fill in with true data</p>";
  }
  else
  {
    $sql = "SELECT name FROM lab_emp where('name=$name'|| 'password=$password');";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
     echo("<p class='font-weight-bolder'>Hello, $name</p>");
    }
  else
  {
    echo'Sql Error! '.mysqli_error($conn);
  }
  }
}
  mysqli_close($conn);
?>  

  <?php require '../service/calculator.php';?>

  </div>  <!-- end container -->
  </body>
  </html>