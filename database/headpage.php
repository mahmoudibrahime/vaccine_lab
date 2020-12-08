<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Vaccine laboratories | Web Page</title>
    <link rel="stylesheet" href="../styles/bootstrap.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9QCNsE7Xt5PId0HuaN08NcYZWz0TfWwxZyg&usqp=CAU">
    
</head>
<body>
         <!--Start Nav Bar-->
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                   <!-- burger btn -->
        <div id ="nav-button">
          <div class="container">
            <h5 class="mt-1">Vaccine Laboratories</h5>
          <form action="database/login.php" method="POST">
            Employer name
            <input class="form-control mr-sm-2" type="text" name="name" placeholder="employer name" aria-label="Search">
            Employer password
            <input class="form-control mr-sm-2" type="password" name="password" placeholder="password" aria-label="Search">
            <button class="btn btn-primary btn-block mt-3" name="btn-login" type="submit">LogIn</button>
            <hr>
            <a id="notemp" href="#">Not an employer</a>
          </form>
        </div>
        </div>
        <!-- end burger btn -->

               <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand font-weight-bolder" href="#" >Vaccine Laboratories</a>
               </div>
               </div>
              </nav>
            
              <!--End of Nav Bar-->
              <div class="cface"></div>
              <!-- Exclusive-->
              <div class="alert alert-danger text-center" role="alert">
                <a href="https://covid19.who.int/region/emro/country/eg"title="To Know more about Covid-19!!" target="_blank"> WHO Warning about COVID-19: in Egypt Today!</a>
              </div>
               <!--End Exclusive-->

               <script src="../scripts/jQuery-3.5.1.js"></script>

               <script>
                 $(document).ready(function(){
                   $('#fadeout').fadeOut(3000);
                 });            
            
  $(document).ready(function(){
    $('.navbar-toggler').click(function(){
      $('#nav-button').fadeToggle('3000');
    });
  });

  $(document).ready(function(){
$('#notemp').click(function(){
  $('#nav-button').fadeOut('3000');
   });
});
</script>
</body>
</html>