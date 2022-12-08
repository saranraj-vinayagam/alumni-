<?php
session_start();
$con = mysqli_connect("localhost","root","","regitration");

if(isset($_POST['register']))
{
    $firstname = $_POST['firstname'];
    $gender = $_POST['gender'];
	$lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
	$batch = $_POST['batch'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$designation = $_POST['designation'];
	

    $query = "INSERT INTO register (firstname,lastname,gender,dob,batch,email,phone,address,designation) VALUES ('$fristname','$gender','$lastname','$dob','$batch','$email','$phone','$address','$designation')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: saran.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: saran.php");
    }
}
?>