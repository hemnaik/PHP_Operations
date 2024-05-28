<body>
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
		      echo "ALL RECORDS FETCHED"."</br>";
                      while($r=mysqli_fetch_assoc($result))
                      {
                          echo "Customer Id=".$r['cid']."</br>";
                          echo "Customer Name=".$r['cname']."</br>";
                          echo "Customer City=".$r['city']."</br>";
                          echo "Customer Mobile=".$r['mobile']."</br>";
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