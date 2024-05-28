//insert record in customer table//
<html>
<body>
<?php
     $con=mysqli_connect("localhost","root","");
	 mysqli_select_db($con,"customer");
	 
	 if($con)
	 {
                echo "CONNECTION ESTABLISHED"."</br>";

	         $insert_table="INSERT INTO customer_new(cid,cname,city,mobile) VALUES(101,'HEM NAIK','VAPI',9909746536)";
		 $result=mysqli_query($con,$insert_table);
		 if($result==true)
		 {
		      echo "RECORD INSERTED"."</br>";
		 }
		 else
		 {
		      echo "RECORD NOT INSERTED"."</br>";
		 }
	 }
         else
         {
               echo "CONNECTION FAILED"."</br>";
         }
  ?>
</body>
</html>