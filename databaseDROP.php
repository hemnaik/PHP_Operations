//database drop//
<html>
<body>
<?php
     $con=mysqli_connect("localhost","root","");
	 mysqli_select_db($con,"customer");
	 
	 if($con)
	 {
                echo "CONNECTION ESTABLISHED"."</br>";

	         $insert_table="DROP DATABASE customer";

		 $result=mysqli_query($con,$insert_table);

		 if($result==true)
		 {
		      echo "DATABASE DROPPED"."</br>";
		 }
		 else
		 {
		      echo "DATABASE NOT DROPPED"."</br>";
		 }
	 }
         else
         {
               echo "CONNECTION FAILED"."</br>";
         }
  ?>
</body>
</html>