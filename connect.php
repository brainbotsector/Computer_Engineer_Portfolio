<?php
	$fullName = $_POST['fullName'];
	$email = $_POST['email'];
	$feedback = $_POST['feedback'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(fullName, email, feedback) values(?, ?, ?)");
		$stmt->bind_param("sss", $fullName, $email, $feedback);
		$execval = $stmt->execute();
		echo $execval;
		echo '<a href="index.php">Wanna go back to homepage..</a>';
		$stmt->close();
		$conn->close();
	}
?>