//to create new database//
<html>
<head>
<body>
<?php
    $query="CREATE DATABASE database_student";
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        mysqli_query($con,$query);
        echo "DATABASE CREATED SUCCESSFULLY"."<br/>";
    }
    else
    {
        echo "DATABASE NOT CREATED"."<br/>"; 
    }
  ?>
</body>
</head>
</html>