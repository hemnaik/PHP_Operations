
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
       
           $createtable="CREATE TABLE customer_info(customer_id varchar(7) NOT NULL PRIMARY KEY,customer_name varchar(30) NOT NULL,aadharcard bigint(12) NOT NULL UNIQUE KEY,mobile bigint(10) NOT NULL UNIQUE KEY)";
                 
          
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