<?php
//    very very very important Code!!!!!!!!
 include 'headpage.php';
 include 'connDB.php';

?>
<!-- html code -->
<div class="container">
    <h3>Patient information</h3>

<table class="table">

    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">sex</th>
      <th scope="col">Tele Number</th>
      <th scope="col">Physicion</th>
      <th scope="col">Request Date</th>
      <th scope="col">Notes</th>
    </tr>
<!-- html code -->
     <?php
          
$sql = "SELECT * FROM patient;";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result)){
     ?>
     <!-- html code -->
             <tr>
      <th scope="col"><?php echo $row['id']; ?></th>
      <th scope="col"><a href="#"><?php echo $row['name']; ?></a></th>
      <th scope="col"><?php echo $row['age']; ?></th>
      <th scope="col"><?php echo $row['sex']; ?></th>
      <th scope="col"><?php echo $row['tel_no']; ?></th>
      <th scope="col"><?php echo $row['introduced_by']; ?></th>
      <th scope="col"><?php echo $row['req_date']; ?></th>
      <th scope="col"><?php echo $row['notes']; ?></th>
            </tr>
            </div>
            <!-- html code -->
        <?php
        }
    }
    
else
{
 echo('Empty database or Sql error<br>'.mysqli_error($conn));
}

mysqli_close($conn);
?>