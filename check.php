<?php
include 'dbcon.php';

$id = mysqli_real_escape_string($con,$_GET['id']);
mysqli_query($con,"UPDATE user SET verification_status='1' WHERE id='$id'");

$msg= "Your Account is succesfully verified<br><br> <a href='loginregister.php'> Click Here for Login</a>";

?>

<!DOCTYPE html>
<html>
<head>

	<title>Account Verified</title>
	<style type="text/css">
		#success {
			margin-top: 200px;
			text-align: center;
			padding: 20px;
			margin-left:400px;
			width: 400px;
			height: 90px;
			color: blue;
			background-color: lightgrey;
			border-radius: 10px;
			}
		#success a{

			text-decoration: none;
			/*border:1px solid white;*/
			/*border-radius: 2px;*/
			/*background-color: white;*/
			color: red;
			text-align: center;
			padding: 5px;
		}			
	</style>
</head>
<body>
<div id="success">
	<?php
		echo $msg;
	?>
</div>
</body>
</html>


<!-- <script type="text/javascript">
	window.location.href='login.php';
</script> -->
