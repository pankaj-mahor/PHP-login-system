
<?php
include 'dbcon.php';
session_start();
if (isset($_POST['email']) && $_POST['password']) {
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql= "SELECT * FROM `user` WHERE `email`='$email' and `password` ='$password'";
	$queryrun = @mysqli_query($con,$sql);
	$check = mysqli_num_rows($queryrun);
	if ($check>0) {
		$row= mysqli_fetch_assoc($queryrun);
		$verification_status= $row['verification_status'];
		if($verification_status==0){
			echo "Please verify Your account. Go check Your Mail account.<br>
			If not found check [Spam Folder]. ";
		}else{
			echo 'done';
			$_SESSION['IS_LOGIN']=1;
			// header('location:Math/index.php');
		}

	}else{
		echo "PLease Enter Correct Login Details ";
	}
}
?>