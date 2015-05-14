<link href="css/bootstrap.css" rel="stylesheet" />
<?php
$fname = ($_POST['fname']);
$lname = ($_POST['lname']);
$status = ($_POST['status']);
$access = ($_POST['access']);
$email = ($_POST['email']);
$id = $_POST['saved'];
$trigger = ($_POST['trigger']);
$change_password = ($_POST['password']);
$confirm_password = ($_POST['confirm_password']);
require_once("config.php");
				
if($trigger=="edit"){
	
	if($change_password == "" && $confirm_password == ""){
		$query = "UPDATE users SET fname='$fname', lname='$lname' ,activation='$status',access='$access' ,email='$email' WHERE id = '$id' ";
		$result =  mysqli_query($db_link, $query);
		header('Location: admin_lists.php');
	}
	
	elseif($change_password != $confirm_password){
		require("timer_edit_users.php");	
	}
	
	elseif($change_password == $confirm_password){
	
		$change_password = mysqli_real_escape_string($db_link, strip_tags(stripslashes($_POST['password'])));
	
		function generateRandomString($length = 10) {
		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;
		}
		
		
		$salt_query = "SELECT salt FROM users WHERE id='$id'";
		$salt_result =  mysqli_query($db_link, $salt_query) or die(mysqli_errno($db_link));
		$salt_row = mysqli_fetch_assoc($salt_result);
		
		$cryptpass = crypt($change_password, $salt_row['salt']); //Hashes the password they entered!
		
		$query = "UPDATE users SET fname='$fname', lname='$lname' ,activation='$status',access='$access' ,email='$email', password='$cryptpass' WHERE id = '$id' ";
		$result =  mysqli_query($db_link, $query) or die(mysqli_errno($db_link));
		header('Location: admin_lists.php');
	
	}
	
	else{
		echo "Error";
	}
	
	
	
	
}

else{
	$query = "DELETE FROM users WHERE id = '$id' ";
	$result =  mysqli_query($db_link, $query);  
	header('Location: admin_lists.php');
}
	
		
?>