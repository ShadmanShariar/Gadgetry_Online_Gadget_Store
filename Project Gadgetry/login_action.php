<?php
  $conn = mysqli_connect("localhost", "root", "", "gadgetry");
  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
	  $lastName = $_POST['lastName'];
	  $password = $_POST['password'];
	  
   $sql = "select * from registration where lastName= '$lastName' and password = '$password'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   
   if($count ==1){
	   echo "Login Success";
   }
   else{
	   echo "login failed";
   }
   
  }

?>