<?php
//    very very very important Code!!!!!!!!
require 'connDB.php';
?>

<table class="table">
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Dept</th>
    </tr>

     <?php
          
$sql = "SELECT * FROM authors;";
$result =mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result)){
   ?>
             <tr>
                
      <th scope="col"><?php echo $row['id']; ?></th>
      <th scope="col"><?php echo $row['name']; ?></th>
      <th scope="col"><?php echo $row['age']; ?></th>
      <th scope="col"><?php echo $row['department']; ?></th>
            </tr>
            <?php
        }
    }
    
else
{
 echo('Empty database<br>'.mysqli_error($conn));
}

mysqli_close($conn);
?>