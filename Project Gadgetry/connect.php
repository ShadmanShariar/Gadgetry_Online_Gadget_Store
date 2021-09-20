<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
    $city = $_POST['city'];
    $housenumber = $_POST['housenumber'];
    $roadnumber = $_POST['roadnumber'];
	// Database connection
	$conn = new mysqli('localhost','root','','gadgetry');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number, city, housenumber, roadnumber) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssisss", $firstName, $lastName, $gender, $email, $password, $number, $city, $housenumber, $roadnumber);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>