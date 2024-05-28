<body>
<?php
     $con=mysqli_connect("localhost","root","");
	 mysqli_select_db($con,"customer");
	 
	 if($con)
	 {
                echo "CONNECTION ESTABLISHED"."</br>";

	         $alter_table="ALTER table customer_new DROP gender, DROP bloodgroup, DROP customer_type"; 

                 //in order to add single column in table//

		 $result=mysqli_query($con,$alter_table);
		 if($result==true)
		 {
		      echo "ALL COLUMNS DROPPED"."</br>";
		 }
		 else
		 {
		      echo "TABLE NOT ALTERED"."</br>";
		 }
	 }
         else
         {
               echo "CONNECTION FAILED"."</br>";
         }
  ?>
</body>
</html>