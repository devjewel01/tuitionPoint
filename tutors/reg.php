<?php
error_reporting();
include 'connect.php';
 
if(isset($_POST['tutorRegistration'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$city=$_POST['city'];
    $address=$_POST['address'];
    $institution = $_POST['institution'];
    $department = $_POST['department'];
    $sscYear = $_POST['sscYear'];
    $sscGpa = $_POST['sscGpa'];
    $hscYear = $_POST['hscYear'];
    $hscGpa = $_POST['hscGpa'];
 
	//code for image uploading
	// if($_FILES['tutorPic']['name']){
	// 	move_uploaded_file($_FILES['tutorPic']['tmp_name'], "upload/".$_FILES['tutorPic']['name']);
	// 	$photo="upload/".$_FILES['tutorPic']['name'];
	// }

    // if($_FILES['studentID']['name']){
	// 	move_uploaded_file($_FILES['studentID']['tmp_name'], "upload/".$_FILES['studentID']['name']);
	// 	$studentID="upload/".$_FILES['studentID']['name'];
	// }
 
	$command = "INSERT INTO `tutorList`(`name`, `email`, `phone`, `gender`, `city`, `address`, `institution`, `department`, `sscYear`, `sscGpa`, `hscYear`, `hscGpa`) 
    VALUES('$name', '$email', '$phone', '$gender', '$city', '$address', '$institution', '$department', '$sscYear', '$sscGpa', '$hscYear', '$hscGpa')";
	
    if(mysqli_query($con, $command))
    {
		echo "<script>alert('We receive your request');</script>";
		header("Location: ../");
	}
    else
    {
		echo "<script>alert('something wrong');</script>";
        //header("Location: ./registration.html");
    }
}
