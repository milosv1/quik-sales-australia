<?php
session_start();

//initialize variables here
$firstname = "";
$email = "";
$errors = array();

//connect to database - connection string
$db = mysqli_connect('localhost', 'quiksalesaus','passwordjagodina','quik_sales_australia');


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  // form validation ensure that the form is correctly filled ...

  if (empty($firstname)) {
      array_push($errors, "Firstname is required");
      }
      
  if (empty($email)) { 
      array_push($errors, "Email is required");
      
  }
  
  if (empty($password)) {
      array_push($errors, "Password is required"); 
  }


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM account WHERE firstname='$firstname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['firstname'] === $firstname) {
     array_push($errors, "firstname already exists");
    }
    

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
    
    echo count($errors);
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database
  	$query = "INSERT INTO account (firstname, email, password) 
  			  VALUES('$firstname', '$email', '$password')";
  	mysqli_query($db, $query);
  	
  	$_SESSION['firstname'] = $firstname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }

 }
 
 
 
 if (isset($_POST['login_user'])) {
  
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
//login - login works
echo count($errors);
echo "test"; //just to check if it reaches this line - It does!
  if (count($errors) == 0) {
    ////
  	$password = md5($password); //encrypt password 
  	$query = "SELECT * FROM account WHERE email ='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	/////
  	
  	if (mysqli_num_rows($results) == 1) {
  	 
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	} else {
  	  
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}

    
  ?>
  
  







