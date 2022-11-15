<?php 

    # database connection file
	include './db.conn.php';

	# fetching images
	$sql  = "SELECT img_name,id FROM
	         images ORDER BY id DESC";

	$stmt = $conn->prepare($sql);
	$stmt->execute();

	$images = $stmt->fetchAll();

 ?>


<div class="grid-wrapper">

<?php 

if ($stmt->rowCount() > 0) {
    foreach ($images as $image){
        echo '
   
    <div>
	<div class="container">
		<img src="/get/uploads/'.$image['img_name'].'" alt="images" />
	<div class="middle">
    <div class="text"><a href="/get/uploads/'.$image['img_name'].'" download>Download</a></div>
	</div>
	</div>
	</div>
        
         ';
    }
}
?>
</div>
