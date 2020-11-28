<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Row</title>
</head>
<body>
    
<h3> Fill Records </h3>    
    <form action="updatedb.php" method="POST">
       Name: 
       <input type="text" name='name' placeholder="Insert author name"><br><br>
       Age: 
       <input type="number" name='age' placeholder="insert age of author"><br><br>
       Department: 
       <input type="text" name='dept' placeholder="put you department">
    <input type="submit" value="Save to DB" name='savetodb'>
    </form>
</body>
</html>
