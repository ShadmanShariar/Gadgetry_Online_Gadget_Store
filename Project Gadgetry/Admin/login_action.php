<?php
  $conn = mysqli_connect("localhost", "root", "", "gadgetry");
  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
	  $lastName = $_POST['lastName'];
	  $password = $_POST['password'];
	  
   $sql = "select * from admin where name= '$lastName' and pass = '$password'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   
   if($count ==1){  ?>

<a href="Product.html">Product Insertion</a>
<br>
<br>
<a href="connection3.php">Stock</a>

<?php 
   }
   else{
	   echo "login failed";
   }
   
  }

?>