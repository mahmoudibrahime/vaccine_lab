<?php
//    very very very important Code!!!!!!!!
   include 'headpage.php'; 
   require 'connDB.php';
?>

<div class="container">
    <h3>Human Resources department.</h3>
    <h4>Vaccine Lab Employers</h4><br>
<table class="table">
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Address 2</th>
      <th scope="col">Job</th>
      <th scope="col">Phone</th>
      <th scope="col">Department</th>
      <th scope="col">City</th>
      <th scope="col">Governorate</th>
    </tr>

     <?php
      
$sql = "SELECT * FROM lab_emp;";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result)){
     ?>
             <tr>
      <th scope="col"><?php echo $row['id']; ?></th>
      <th scope="col"><?php echo $row['name']; ?></th>
      <th scope="col"><?php echo $row['email']; ?></th>
      <th scope="col"><?php echo $row['address']; ?></th>
      <th scope="col"><?php echo $row['address_2']; ?></th>
      <th scope="col"><?php echo $row['job']; ?></th>
      <th scope="col"><?php echo $row['phone']; ?></th>
      <th scope="col"><?php echo $row['department']; ?></th>
      <th scope="col"><?php echo $row['city']; ?></th>
      <th scope="col"><?php echo $row['governorate']; ?></th>
    
            </tr>
            </div>
        <?php
        }
    }
    
else
{
 echo('Empty database or Sql error<br>'.mysqli_error($conn));
}

mysqli_close($conn);
?>