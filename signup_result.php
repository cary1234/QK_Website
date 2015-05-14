<?php
session_start();
include ('config.php');
    $error = array();//Declare An Array to store any error message  
    if (empty($_POST['fname']) or empty($_POST['lname'])) {//if no name has been supplied 
        $error[] = 'Please Enter a name ';//add to array "error"
    } else {
        $fname = $_POST['fname'];//else assign it a variable
		 $lname = $_POST['lname'];//else assign it a variable
    }

    if (empty($_POST['email'])) {
        $error[] = 'Please Enter your Email ';
    } else {

        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])) {
           //regular expression for email validation
            $email = mysqli_real_escape_string($db_link, strip_tags(stripslashes($_POST['email'])));
        } else {
             $error[] = 'Your Email Address is invalid  ';
        }
    }

    if (empty($_POST['password'])) {
        $error[] = 'Please Enter Your Password ';
    }
	elseif ($_POST['password'] != $_POST['confirmpassword']){
		$error[] = 'The Password You Enter Do Not Match ';
	}
	else{
		$password = mysqli_real_escape_string($db_link, strip_tags(stripslashes($_POST['password'])));
		
		function generateRandomString($length = 10) {
		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;
		}
		
		$rand = generateRandomString(); //Generates 10 random characters
		$str = substr($rand, 0, 6); //Shortens the 10 random generated string to 6
		$salt = '$2a$07$rsajT9A5Dk5D9A1hF'.$str.'$';  //Creates a random salt (DO NOT CHANGE THIS VERY IMPORTANT)
		//You can how ever change the part where is says 07 to 12 you can use 1 - 12 [12 being more secure and 1 being least secure] 
		//How ever the more secure it is - the slower it will take to generate the hash
		//When you use 1 - 9 make sure to put a 0 infront of e.g 6 will be 06 :D
		$cryptpass = crypt($password, $salt); //Hashes the password they entered!
    }

    if (empty($error)) {//send to Database if there's no error '
    	// If everything's OK...

        // Make sure the email address is available:
        $query_verify_email = "SELECT * FROM users  WHERE email ='$email'";
        $result_verify_email = mysqli_query($db_link, $query_verify_email);
        if (!$result_verify_email) {//if the Query Failed ,similar to if($result_verify_email==false)
            echo 'The email you entered is already registered.';
        }

        if (mysqli_num_rows($result_verify_email) == 0) { // IF no previous user is using this email .

            // Create a unique  activation code:
            $activation = md5(uniqid(rand(), true));
			$accesstype = $_POST['accesstype'];
			
            $query_insert_user = "INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `salt`, `activation`, `access`) VALUES ( '$fname', '$lname', '$email', '$cryptpass', '$salt', '$activation', '$accesstype')" or die("Error" . mysqli_errno($db_link));
			

            $result_insert_user = mysqli_query($db_link, $query_insert_user);
            if (!$result_insert_user) {
                echo 'Query Failed';
            }

            if (mysqli_affected_rows($db_link) == 1) { //If the Insert Query was successfull.

                // Send the email:
				
                $message = " To activate your account, please click on this link:\n\n" . "quickitchen.net/" 
				. "activate.php?email=" . urlencode($email) . "&key=" . $activation . 
				"\n\n If the url above is not clickable, kindly copy the url and paste it to the address bar.";
                mail($email, 'Quickitchen - Confirm Email', $message, 'From: Quickitchen Admin');

				date_default_timezone_set("Asia/Tbilisi");
				$date=date('M d, Y  H:i:s');
				$user_id= ($_SESSION['id']);
				$action="INSERT INTO actions(user_id,action,Date_Time) values ('$user_id','Registered $email','$date')";
				$action_result =  mysqli_query($db_link, $action);
                
				// Flush the buffered output.

                // Finish the page:?> 
                <div class="success">
                	Thank you for registering! A confirmation email has been sent to <?php echo $email ?>
                    Please click on the Activation Link to Activate your account.
				</div><?php

            }
			else{ // If it did not run OK.?>
                <div class="errormsgbox">
                	You could not be registered due to a system error. We apologize for any inconvenience.
                </div><?php
            }

        } else { // The email address is not available. ?>
            <div class="errormsgbox" >
            	That email address has already been registered.
			</div><?php
        }

    }
	else {//If the "error" array contains error msg , display them 
    	
		if (!isset($_SESSION['access'])){
			require("timer_index.php");
		}
		elseif ($_SESSION['access'] == "root") {
			header("Location: admin_lists.php");
		}
		else{
			require("timer_index.php");
		}?>
		
		<div class="errormsgbox text-center"><?php
			foreach ($error as $key => $values) {
				echo $values;
			}?>
        </div><?php
    }
  
    mysqli_close($db_link);//Close the DB Connection
?>