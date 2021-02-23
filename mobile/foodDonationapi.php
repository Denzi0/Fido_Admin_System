<?php 

    $db = mysqli_connect('localhost','root','','fido');

	if(!$db){
		echo "database failed";
	}
    $donorname = mysqli_real_escape_string($db,$_POST['donorname']);
    $foodtitle = mysqli_real_escape_string($db,$_POST['foodtitle']);

    $foodname = mysqli_real_escape_string($db,$_POST['foodname']);
    $foodtype = mysqli_real_escape_string($db,$_POST['foodtype']);
    $foodquantity = mysqli_real_escape_string($db,$_POST['foodquantity']);
    $foodDescription = mysqli_real_escape_string($db,$_POST['fooddescription']);

    $sql = "INSERT INTO donorfood (donorID,foodtitle,foodname,foodtype,foodquantity,description)
    VALUES((SELECT donorID FROM donordetails WHERE donorUname = '$donorname'),'$foodtitle','$foodname','$foodtype','$foodquantity','$foodDescription')";

    $result = mysqli_query($db ,$sql);

    if($result > 0){
        echo json_encode("Success");
    }
?>