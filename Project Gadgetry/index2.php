<?php
	$number = $_POST['number'];
	$name = $_POST['name'];
	$code = $_POST['code'];
	// Database connection
	$conn = new mysqli('localhost','root','','gadgetry');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into bkash(number, name, code) values(?, ?, ?)");
		$stmt->bind_param("sss", $number, $name, $code);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>