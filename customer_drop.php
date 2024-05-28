//drop the customer_new table in php//
<html>
<body>
<?php
     $con=mysqli_connect("localhost","root","");
	 mysqli_select_db($con,"customer");
	 
	 if($con)
	 {
	     $drop_table="DROP table customer_new";
		 $result=mysqli_query($con,$drop_table);
		 if($result==true)
		 {
		      echo "TABLE DROPPED"."</br>";
		 }
		 else
		 {
		      echo "TABLE NOT DROPPED"."</br>";
		 }
	 }
  ?>
</body>
</html>
