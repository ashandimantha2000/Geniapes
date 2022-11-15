<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload</title>
    <link rel="stylesheet" type="text/css" href="../styles/upload.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <form method="post" action="uploadback.php" enctype="multipart/form-data">

        <?php
              if (isset($_GET['error'])) {
                echo "<p class='error'>";
                    echo htmlspecialchars($_GET['error']);
                echo "</p>";
              }
        ?>
        <div class="file-upload">
        <center><h1 class="titleU">UPLOAD FILE</h1></center>

          <input class="txt" type="text" name="imgname" value="" placeholder="IMAGE NAME">

          <div class="image-upload-wrap">
            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="images[]" multiple/>
            <div class="drag-text">
              <h3>Drag and drop a file or select add Image</h3>
            </div>
          </div>

          <button class="file-upload-btn" type="submit" name="upload">Upload Image</button>

          <div class="file-upload-content">
            <img class="file-upload-image" src="#" alt="your image" />
            <div class="image-title-wrap">
              <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
            </div>
          </div>
        </div>

      </form>


<script type="text/javascript" src="uploadfile.js"></script>
<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>




  </body>
</html>

<!-- ----------------------------------------------------------------------- -->
