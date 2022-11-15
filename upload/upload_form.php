
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Image Upload</title>
	<link rel="stylesheet" href="styles/nav.css" type="text/css">
	</head>
<body>

<!--Navigation Bar -->


	<form method="post" 
	      action="upload.php"
	      enctype="multipart/form-data">

	    <?php
            if (isset($_GET['error'])) {
            	echo "<p class='error'>";
            	    echo htmlspecialchars($_GET['error']);
            	echo "</p>";
            }
	    ?>

		<input type="file"
		       name="images[]"
		       multiple>

		<button type="submit"
		        name="upload">
		    Upload</button>
	</form>

</body>
</html>
