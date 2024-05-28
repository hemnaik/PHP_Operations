<body>
<?php
     $con=mysqli_connect("localhost","root","");
	 mysqli_select_db($con,"customer");
	 
	 if($con)
	 {
                echo "CONNECTION ESTABLISHED"."</br>";

	         $delete_table="DELETE FROM customer_new WHERE cid=101";  //Delete specific records of customer_new table//
		 $result=mysqli_query($con,$delete_table);
		 if($result==true)
		 {
		      echo "RECORD DELETED"."</br>";
		 }
		 else
		 {
		      echo "RECORD NOT DELETED"."</br>";
		 }
	 }
         else
         {
               echo "CONNECTION FAILED"."</br>";
         }
  ?>
</body>
</html>