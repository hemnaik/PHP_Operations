<body>
<?php
     $con=mysqli_connect("localhost","root","");
	 mysqli_select_db($con,"customer");
	 
	 if($con)
	 {
                echo "CONNECTION ESTABLISHED"."</br>";

	         $rename_table="RENAME TABLE customer_new TO customer_table";
		 $result=mysqli_query($con,$rename_table);
		 if($result==true)
		 {
		      echo "TABLE RENAMED"."</br>";
		 }
		 else
		 {
		      echo "TABLE NOT RENAMED"."</br>";
		 }
	 }
         else
         {
               echo "CONNECTION FAILED"."</br>";
         }
  ?>
</body>
</html>
