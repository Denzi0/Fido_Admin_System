
<?php 


	// $fname = $_POST['fullname'];
	// $address = $_POST['address'];

	// $username = $_POST['username'];
	// $email = $_POST['email'];
	// $age = $_POST['age'];
	// $contact = $_POST['contact'];
	// $password = $_POST['password'];

	

	$db = mysqli_connect('localhost','root','','fido');

	if(!$db){
		echo "database failed";
	}

	$fname = $_POST['fullname'];
	$address = $_POST['address'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$contact = $_POST['contact'];
	$password = $_POST['password'];

	
	

	$sql = "SELECT * FROM donordetails WHERE donorUname = '".$username."'  AND donorPassword = '".$password."' ";

	$result = mysqli_query($db, $sql);

	$count  = mysqli_num_rows($result);

	if ($count == 1) {
			echo json_encode("Error");
	}else{
			$insert = "INSERT INTO donordetails(donorFname,donorAddress,donorUname,donorEmail,donorAge
			,donorContact,donorPassword)
			VALUES('".$fname."','".$address."','".$username."','".$email."','".$age."','".$contact."','".$password."')";
			$query = mysqli_query($db,$insert);
			if ($query) {
				echo json_encode("Success");
			} 
	}
?>



