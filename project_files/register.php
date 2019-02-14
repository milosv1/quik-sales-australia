<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<?php include('includes/head.php')?>
<body>
  <div class="header">
     <h2 align="center"></a>Create an account</h2>
  	 </div>
	<div class="container">
      <div class="row">
        <form method="post" action="server.php" class="col-md-4 offset-md-4">
  <!--<form method="post" action="server.php">-->
  	<?php include('errors.php'); ?>
  	
  	  
  	    <!--<h2 align="center">Create an account</h2>-->
  	    <div class="form-group">
  	      <label for="firstname">First Name</label>
  	      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $firstname; ?>">
  	    </div>
  	    
  	<div class="form-group">
      <label for="email">Email</label>
  	  <input type="email"  class="form-control" name="email" id="email" placeholder="Email Address" value="<?php echo $email; ?>">
  	</div>
  	
  	<div class="form-group">
  	 <label for="email">Password</label>
  	  <input type="password" class="form-control" id="password"placeholder="Password" name="password">
  	</div>
  	
  	<div class="input-group-btn">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	
  	<div class="join-text-group">
  	  <p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  	</div>
  	<div class ="help-btn">
  		  <button type="submit" class="btn" name="help">Help!</button>
  		</div>
  </form>
</body>
</html>