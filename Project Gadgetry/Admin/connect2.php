<?php
	$color = $_POST['color'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$pimg = $_POST['pimg'];
	$pname = $_POST['pname'];

	// Database connection
	$conn = new mysqli('localhost','root','','gadgetry');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into product (color, description, price, pimg, pname) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $color, $description, $price, $pimg, $pname);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>