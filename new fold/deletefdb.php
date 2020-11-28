<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .pink{ 
        width:100%;
        height:60px;
        text-align:center;
        background-color: pink;
        line-height: 60px;
    }
    </style>
</head>
<body>
    
    <h3>To clean Your DB</h3>
    <div class="pink" >
        <form action="" method="POST">
        Please Put #ID:
        <input type="number" placeholder="numbers only" name='idname'>
        <input type="submit" value="Delete Record" name="delbyid">
        </div>
        </form>

</body>
</html>
<?php
    include_once 'Db.php';
    
    if(isset($_POST['delbyid'])){
        $iD = $_POST['idname'];
            $sql = "DELETE from authors WHERE (id=$iD)";
            
            if(mysqli_query($conn, $sql)){
                echo " <div class='pink'>selected row was deleted</div>";
            }
            else
            {echo" Nothing was done".mysqli_error($conn);}
            
            mysqli_close($conn);
            }
    ?>