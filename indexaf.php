

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./styles/grid.css">
<link rel="stylesheet" type="text/css" href="./styles/hover.css">
<link rel="stylesheet" type="text/css" href="./styles/nav.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<?php
include("./Layout2.php"); 

?>

<body>

<div class="imagemenu">

<?php 
include("../includes/photos.php");
?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- View Hide - Navigation -->
  <script type="text/javascript">
      window.addEventListener("scroll", function () {
          var header = document.querySelector("header");
          header.classList.toggle("sticky",window.scrollY > 0);
      })
  </script>

</body>