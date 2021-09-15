<?php
   

   if(isset($_POST['create_user'])) {
	   
	   
                 
   
            $username           = $_POST['username'];
            $user_firstname     = $_POST['firstname'];
            $user_lastname      = $_POST['lastname'];
            $user_password      = $_POST['password'];
       		$user_email         = $_POST['email'];
	      
            $user_image         = $_FILES['image']['name'];
            $user_image_temp    = $_FILES['image']['tmp_name'];
        
            $user_date          = date('d-m-y');

       
        move_uploaded_file($user_image_temp, "../images/$user_image" );
       
       
      $query = "INSERT INTO users(username, user_firstname, user_lastname, user_date, user_password, user_email, user_image) ";
             
      $query .= "VALUES('{$username}','{$user_firstname}','{$user_lastname}',now(),'{$user_password}','{$user_email}','{$user_image}') "; 
             
      $create_post_query = mysqli_query($connection, $query);  
          
      confirmQuery($create_post_query);

       echo "User Created: " . " " . "<a href='users.php'>View Users<a> ";


   }
?>

	<form action="" method="post" enctype="multipart/form-data">

		<div class="form-group">

			<label for="username">Username</label>
			<input type="text" class="form-control" name="username">

		</div>

		<div class="form-group">

			<label for="firstname">First Name</label>
			<input type="text" class="form-control" name="firstname">

		</div>
		
		<div class="form-group">

			<label for="lastname">Last Name</label>
			<input type="text" class="form-control" name="lastname">

		</div>
	
		<div class="form-group">

			<label for="password">Password</label>
			<input type="text" class="form-control" name="password">

		</div>

		<div class="form-group">

			<label for="email">Email</label>
			<input type="email" class="form-control" name="email">

		</div>

		<div class="form-group">

			<label for="post_image">Profile Image</label>
			<input type="file" name="image">

		</div>


		<div class="form-group">

			<input type="submit" class="btn btn-success" name="create_user" value="Submit User">

		</div>

	</form>
