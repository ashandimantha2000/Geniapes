<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: myaccount.html");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="styles/login.css">

	<title>My Account - Geniapes</title>
</head>
<body>


    <div class="container">
		<form action="" method="POST" class="login-email">
			
			<div class="input-group">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;"><?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?></p>
         <br><br><br><br>
				<button name="submit" class="btn"><a href="logout.php">Logout</a></button>
                <br>
                <button name="submit" class="btn"><a href="index_2.php">Back to Home</a></button>
			</div>
			
		</form>
	</div>
</body>
</html>

