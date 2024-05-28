
//to create new data table in existing database//
<html>
<head>
<body>
<?php
   
     $connection=mysqli_connect("localhost","root","");
     mysqli_select_db($connection,"customer");
     
     if($connection)
     {
           echo "<br/>"."DATABASE CONNECTED SUCCESSFULLY";
       
           $createtable="CREATE TABLE customer_new(cid int(5) PRIMARY KEY, cname varchar(20) NOT NULL, city varchar(20) NOT NULL, mobile bigint(10))";
                 
          
           $result=mysqli_query($connection,$createtable);
           if($result)
           {
               echo "<br/>"."DATATABLE CREATED SUCCESSFULLY";
           }
           else
           {
               echo "<br/>"."DATATABLE NOT CREATED";
           } 
     }
     else
     {
          echo "<br/>"."DATABASE NOT CONNECTED";
     }
?>
</body>
</head>
</html>
