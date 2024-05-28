dy>
<?php
     $con=mysqli_connect("localhost","root","");
	 mysqli_select_db($con,"customer");
	 
	 if($con)
	 {
                echo "CONNECTION ESTABLISHED"."</br>";

	         $select_table="SELECT * FROM customer_new"; 


		 $result=mysqli_query($con,$select_table);
		 if($result)
		 {
		      $num=mysqli_num_rows($result);
                      echo "Number of Records in Customer_new table=".$num."</br>";
                 }
                      
		 else
		 {
		      echo "NO RECORDS FOUND"."</br>";
		 }
	 }
         else
         {
               echo "CONNECTION FAILED"."</br>";
         }
         mysqli_close($con);
  ?>
</body>
</html>