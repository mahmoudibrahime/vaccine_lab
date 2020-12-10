<?php 
    include 'headpage.php';// include header page
    require 'connDB.php'; // include db connection
?>  

<div class="container">
<h3 class="mt-4">Human resources department</h3> 
<h4>Fill up required information</h4>
<form action="newEmp.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-9 col-sm-6 col-12">
      <label for="">Name:</label>
      <input type="text" class="form-control" name="name" id="inputname">
    </div>
    <div class="form-group col-md-3 col-sm-6 col-12">
      <label for="">Photo</label>
      <input type="image" class="form-control" name="photo" id="inputname" src="Photo is not available">
    </div>
    <div class="form-group col-md-3 ">
      <label for="">birth date:</label>
      <input type="date" class="form-control" name="birthdate" id="inputname">
      </div>
    <div class="form-group col-md-3">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPhone">Telephone No.</label>
      <input type="text" class="form-control" name="telno" id="inputEmail">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" name="password" id="inputPassword">
    </div>
  </div>
  <div class="form-group col-lg-6 col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="3 Omar ibn ElKhattab St">
  </div>
  <div class="form-group col-lg-6 col-md-6">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" name="address2" id="inputAddress2" placeholder="Apartment,.. & floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputJob">Job</label>
      <input type="text" class="form-control" name="job" id="inputJob">
    </div>
    <div class="col-md-3 mb-3">
      <label for="">Department</label>
      <select class="custom-select" name="selectdept" required>
        <option selected disabled value="">Choose Department</option>
        <option>Laboratory</option>    
            <option>Finance</option>
            <option>Advertising</option>
            <option>Workers</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputJob">Hiring Date</label>
      <input type="date" class="form-control" name="hiredate" id="inputhiredate">
    </div>
    <div class="form-group col-md-3">
      <label for="inputJob">Salary</label>
      <input type="number" class="form-control" name="salary" id="inputsalary" disabled>
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
 
if(isset($_POST['empsub']))
{
    $name = $_POST['name'];
    //$photo = $_POST['photo']; still unfunctional
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $telno = $_POST['telno'];      
    $password = $_POST['password'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $job = $_POST['job']; 
    $department = $_POST['selectdept'];
    $hiredate = $_POST['hiredate'];
    $city = $_POST['city'];
    $gov = $_POST['gov'];

    $arr = [$name, $birthdate, $email, $telno, $password, $address, 
            $address2, $job, $department, $hiredate, $city, $gov];

   if(count($arr)<=11 ) // condition prevent empty record
   {
   echo("Please, fill records again with right data.");
   }
   else
   {

$sql = "INSERT INTO lab_emp(name, photo ,email, password, address, address_2, job, city, governorate, 
                            phone, department, hiring_date, birth_date )
        VALUES
        ('$name', 'null', '$email', '$password', '$address', '$address2', '$job', '$city', '$gov', 
        '$telno', '$department','$hiredate', '$birthdate' )";
        

if(mysqli_query($conn, $sql)){
    echo " New Employer information inserted succesfully.";
}
else
{
  echo" Erorr! DataBase, Employer already registered".mysqli_error($conn);
}

mysqli_close($conn);
}
}
 ?>