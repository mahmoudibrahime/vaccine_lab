<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Info | Vaccine Laboratories</title>
    <link rel="stylesheet" href="../styles/bootstrap.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>
<body>
<?php require 'template.php';?>

<!-- end nav-bar -->

<div class="jumbotron jumbotron-fluid m-5">
  <div class="container">
    <h2 class="display-4">Laboratory Testing list</h2>
    <hr style="border-top:2px dotted #ccc">
    <p class="lead">All testing lists provided with care, accuracy and experiece with world standards.</p>
  </div>
</div>
<div class="container">
<div class="content pl-4">
 <h4> OUR TESTING MENU INCLUDES IN THE FOLLOWING CATEGORIES</h4>
 <strong> 10 most important lab tests for adults to have done regularly</strong>
 <ol>
   <li>Complete blood count</li>
   <li>basic metabolic tests</li>
   <li>Compelete metabolic tests</li>
   <li>Lipid test</li>
   <li>Thyroid tests</li>
   <li>Enzyme markers</li>
   <li>Std test</li>
   <li>Coagulation tests</li>
   <li>Allergy tests</li>
   <li>Tumer markers</li>
 </ol>
</div>
</div>
<br>
<br>
<!-- end header -->
<div class="container">
<h4> OUR TESTING MENU INCLUDES IN VACCINE LABORATORIES</h4>
<table class="table table-light">
    <tr>
      <th scope="row">#</th>
      <td colspan="2" class="table-active">Applied Test Name</td>
      <td>Meaning or "synonymus"</td>
    </tr>
  </tbody>
</table><hr>
<?php
  require '../database/configDB.php';
  $conn = mysqli_connect($host, $user, $pass, $DBname);
  if(!$conn)
{
    echo(
        '<p class="alert alert-warning">Error !! DataBase Connection Error</p>'.mysqli_error($conn)
    );
}
else
{
    echo("<p id='fadeout'><b>You are Connected to Database.</b></p><br>");
}

if (!isset ($_GET['pageno']) ) {  
  $pageno = 1;  
} else {  
  $pageno = $_GET['pageno'];  
}  
// $no_of_records_per_page = 10;  
$offset = ($pageno-1) * 10;    
$total_pages_sql = "SELECT COUNT(*) FROM lab_test";
$result = mysqli_query($conn, $total_pages_sql);

$total_rows = mysqli_fetch_array($result)[0];  
  //determine the total number of pages available  
$number_of_page = ceil ($total_rows / 10);  
$sql = "SELECT * FROM lab_test LIMIT $offset, 10";
$res_data = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($res_data)){
    ?>
    <table class="table table-light">
 <th scope="row"><?php echo $row['id']?></th>
 <td colspan="2" class="table-active"><?php echo $row['test_name']?></td>
 <td><?php echo $row['synonymus']?></td>
</tr>
</tbody>
</table>
    <?php
}

for($pageno = 1; $pageno <= $number_of_page; $pageno++) 
{  
  echo "<a href = 'testmenu.php?pageno= $pageno' class='alert-secondary' style='padding-inline:7px;' >$pageno</a>";
}

mysqli_close($conn)

?> 
</div>

        <script src="../scripts/jQuery-3.5.1.js"></script>
        <script>
          $(document).ready(function(){
                   $('#fadeout').fadeOut();
                 });  
        </script>
              
</body>
</html>

<!-- best example for pagination code learn -->
 
