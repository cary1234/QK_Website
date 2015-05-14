<?php
include ('config.php');
// Initialize a session:
session_start();
$error = array();//this aaray will store all error messages
  
if (empty($_POST['email'])){//if the email supplied is empty 
        $error[] = 'You forgot to enter  your Email ';
}
else{
		
	if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])) {
		$email = mysqli_real_escape_string($db_link, strip_tags(stripslashes($_POST['email'])));
    }
	else{
    	$error[] = 'Your Email Address is invalid  ';
    }
}


if (empty($_POST['password'])) {
	$error[] = 'Please Enter Your Password ';
}
else {
	$password = mysqli_real_escape_string($db_link, strip_tags(stripslashes($_POST['password'])));
}

if (empty($error)){ //if the array is empty , it means no error found 
	$query = "SELECT * FROM users WHERE email = '$email'";
	$result = mysqli_query($db_link, $query);
	$row = mysqli_fetch_assoc($result);
	$get_email  = $row['email'];
	$get_password = $row['password'];
	$get_salt = $row['salt'];  	
	
	//This is vital for Bcyrpt to work so leave it!
	if(CRYPT_BLOWFISH != 1) {
		throw new Exception("bcrypt not supported in this installation. See http://php.net/crypt"); 
	}
	
	//This is hashing the password with the salt we used. The salt is generated on the register page!	 
	$cryptpass = crypt($password, $get_salt); 
	$query_check_credentials = "SELECT * FROM users WHERE (email='$email' AND password='$cryptpass') AND Activation='activated'";
	$result_check_credentials = mysqli_query($db_link, $query_check_credentials);

	if(!$result_check_credentials){//If the QUery Failed 
		echo 'Query Failed ';
	}
	
	if (@mysqli_num_rows($result_check_credentials) == 1){ //if Query is successfull 
		// A match was made.
		//Assign the result of this query to SESSION Global Variable
		$_SESSION = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC); 
		header("Location: index.php");
	}
	else {
		$msg_error= 'Either Your Account is inactive or Email address / Password is Incorrect';
	}

}
else {
	echo '<div class="errormsgbox"> <ol>';
    foreach ($error as $key => $values) {
    	echo '	<li>'.$values.'</li>';
    }
    echo '</ol></div>';
}

if(isset($msg_error)){
	echo '<div class="warning">'.$msg_error.' </div>';
}
/// var_dump($error);
mysqli_close($db_link);
?>