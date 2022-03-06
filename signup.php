<?php

$showAlert = false;
$showError = false;
$exists=false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
	include 'dbconnect.php';

	$username = $_POST["username"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];
	$fullname = $_POST["fullname"];

	$sql = "Select * from users where username='$username'";

	$result = mysqli_query($conn, $sql);

	$num = mysqli_num_rows($result);

	if($num == 0) {
		if(($password == $cpassword) && $exists==false) {
			$sql = "INSERT INTO `users` ( `fullname`, `username`,
				`password`, `date`) VALUES ('$fullname', '$username',
				'$password', current_timestamp())";

			$result = mysqli_query($conn, $sql);

			if ($result) {
				$showAlert = true;
			}
		}
		else {
			$showError = "Passwords do not match";
		}
	}

if($num>0)
{
	$exists="Username not available";
}

}

?>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Signup.geniapes</title>
      <link rel="stylesheet" href="login.css">
   </head>
   <body>

  <!-- php -->
  <?php

	if($showAlert) {

		echo ' <div class="alert alert-success
			alert-dismissible fade show" role="alert">

			<strong>Success!</strong> Your account is
			now created and you can login.
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div> ';
	}

	if($showError) {

		echo ' <div class="alert alert-danger
			alert-dismissible fade show" role="alert">
		<strong>Error!</strong> '. $showError.'

	<button type="button" class="close"
			data-dismiss="alert aria-label="Close">
			<span aria-hidden="true">×</span>
	</button>
	</div> ';
}

	if($exists) {
		echo ' <div class="alert alert-danger
			alert-dismissible fade show" role="alert">

		<strong>Error!</strong> '. $exists.'
		<button type="button" class="close"
			data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div> ';
	}

?>
      <div class="wrapper">
         <div class="title">
            Signup
         </div>
         <form action="signup.php" method="post">
            <div class="field">
               <input type="text" name="fullname" required>
               <label>Full Name</label>
            </div>

            <div class="field">
               <input type="text" name="username" required>
               <label>Email</label>
            </div>
            <form action="#">
                <div class="field">
                   <input type="password" name="password" required>
                   <label>Password</label>
                </div>
                <form action="#">
                    <div class="field">
                       <input type="password" name="cpassword" required>
                       <label>Confirm Password</label>
                    </div>
            <div class="content">
            </div>
            <div class="field">
               <input type="submit" value="Signup">
            </div>
            <div class="signup-link">
               Already have a account? <a href="login.php">Login now</a>
            </div>
         </form>
      </div>
			<script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js"
	integrity="
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	crossorigin="anonymous">
</script>

<script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous">
</script>

<script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
	integrity=
"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
	crossorigin="anonymous">
</script>
   </body>
</html>
