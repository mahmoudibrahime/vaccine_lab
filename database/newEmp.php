<?php include 'headpage.php';?>  <!--include header -->

<div class="container">
<h3 class="mt-4">Human resources department</h3> 
<h4>Fill up required information</h4>
<form action="newEmp.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="">Name:</label>
      <input type="text" class="form-control" name="name" id="inputname">
    </div>
    <div class="form-group col-md-8">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail">
    </div>
    <div class="form-group col-md-8">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" name="password" id="inputPassword">
    </div>
  </div>
  <div class="form-group col-md-8">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="3 Omar ibn ElKhattab St">
  </div>
  <div class="form-group col-md-8">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" name="address2" id="inputAddress2" placeholder="Apartment,.. & floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputJob">Job</label>
      <input type="text" class="form-control" name="job" id="inputCity">
    </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputGov">Governorate</label>
      <input type="text" class="form-control" name="gov" id="inputGov">
     </div>
     <div class="form-group col-md-4"><br>
     <button type="submit" class="btn btn-primary btn-block mt-2" name="empsub">Submit</button>
     </div>
  </div>
</form>
</div> 

<?php
 require 'connDB.php'; // include db connection
if(isset($_POST['empsub']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $address_2 = $_POST['address2'];
    $job = $_POST['job'];
    $city = $_POST['city'];
    $gov = $_POST['gov'];

    $arr = [$name, $email, $password, $address, $address_2, $job, $city, $gov];

   if(count($arr)<=7 ) // condition prevent empty record
   {
   echo("Please, fill records again with right data.");
   }
   else
   {

$sql = "INSERT INTO lab_emp(name, email, password, address, address_2, job, city, gov )
        VALUES
        ('$name', '$email', '$password', '$address', '$address_2', '$job', '$city', '$gov')";

if(mysqli_query($conn, $sql)){
    echo " New Employer inserted to DataBase.";
}
else
{
  echo" Erorr! DataBase, Employer already registered".mysqli_error($conn);
}

mysqli_close($conn);
}
}
 ?>

<!-- </body>
</html> -->