<?php 
    $db = mysqli_connect('localhost','root','','fido');

	if(!$db){
		echo "database failed";
	}

	$orgname = $_POST['orgname'];
	$orgpassword = $_POST['orgpassword'];
    $sql = "SELECT * FROM orgdetails WHERE orgName = '".$orgname."'  AND orgPassword = '".$orgpassword."' ";
	$result = mysqli_query($db, $sql);
    $count  = mysqli_num_rows($result);
    if($count == 1){
        echo json_encode("Success");
    }else {
        echo json_encode("Error");

    }
?>