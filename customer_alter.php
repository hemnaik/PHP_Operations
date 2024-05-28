<body>
<?php
     $con=mysqli_connect("localhost","root","");
	 mysqli_select_db($con,"customer");
	 
	 if($con)
	 {
                echo "CONNECTION ESTABLISHED"."</br>";

	         $alter_table="ALTER table customer_new ADD COLUMN gender varchar(20) NOT NULL";
                  //in order to add single column in table//

		 $result=mysqli_query($con,$alter_table);
		 if($result==true)
		 {
		      echo "TABLE ALTERED"."</br>";
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