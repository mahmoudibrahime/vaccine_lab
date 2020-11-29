<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
<!-- PHP START -->
<?php
 include 'headpage.php';
 require 'connDB.php';

  if(isset($_POST['btn-login']))
{
  $name = $_POST['name'];
  $password = $_POST['password'];
  
  if ($name=='' || $password=='')
  {
    echo"<P class='alert alert-info'>go back and fill with true data</p>";
  }
  else
  {
    $sql = "SELECT name FROM lab_emp where('name=$name'|| 'password=$password');";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
      // while($row = mysqli_fetch_row($result)){echo(
      //   " <p class='alert alert-info'>Hello, $row[0]</p>"
      //   );}//end while didn`t work
      
      echo(" <p class='alert alert-info'>Hello, $name</p>");
  }
  else
  {
    echo'Sql Error! '.mysqli_error($conn);
  }
  }
}
  mysqli_close($conn);
?>  
<!-- PHP END -->

  </body>
  </html>