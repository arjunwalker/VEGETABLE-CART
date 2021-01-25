<?php
    	require 'demopagecon.php';
     
    	if(ISSET($_POST['register'])){
    		$firstname = $_POST['firstname'];
    		$lastname = $_POST['lastname'];
    		$username = $_POST['username'];
    		$password = $_POST['password'];
     
    		mysqli_query($conn, "INSERT INTO `login` VALUES('', '$firstname', '$lastname', '$username', '$password')") or die(mysqli_error());
    		// echo "<h3 class='text-success'>User account registered!</h3>";
    	}
    ?>
<!DOCTYPE html>
    <html lang="en">
    	<head>
    		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		
		</head>
    <body>
    	<nav class="navbar navbar-default">
    		<div class="container-fluid">
				<a class="navbar-brand">Update</a>
    		</div>
    	</nav>
    	
    		<div class="col-md-6">
    			<form method="POST" action="">
    				<div class="form-group">
    					<label>Firstname</label>
    					<input type="text" class="form-control" name="firstname" required="required"/>
    				</div>
    				<div class="form-group">
    					<label>Lastname</label>
    					<input type="text" class="form-control" name="lastname" required="required"/>
    				</div>
    				<div class="form-group">
    					<label>Username</label>
    					<input type="text" class="form-control" name="username" required="required"/>
    				</div>
    				<div class="form-group">
    					<label>Password</label>
    					<input type="password" class="form-control" maxlength="12" name="password" required="required"/>
    				</div>
    				<p><input type="checkbox" id="toggle"/> Are you sure you want to update</p>
    				<button class="btn btn-primary" id="register" name="register">Update</button>
				</form>
				<a href="index.html">Home</a>
    		</div>
    		<div class="col-md-6">
    		<!-- <?php include 'demopagereg.php'?> -->
    		</div>
    	</div>
    <script>
    var checkbox = document.getElementById("toggle");
    var register = document.getElementById("register");
    register.disabled = true;
    checkbox.onchange = function(){
    	register.disabled = !this.checked;
    }
    </script>	
    </body>
    </html>