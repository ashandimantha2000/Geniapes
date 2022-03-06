<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login.geniapes</title>
      <link rel="stylesheet" href="login.css">
      <script language="javascript" type="text/javascript">
         function validateform()
         {
            if(document.form.uname.value.length==0)
            {
               window.alert("Empty Username");
               return;
            }
         }</script>
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login
         </div>
         <form action="dbconnection.php" method="post">
         <?php if (isset($_GET['error'])) { ?>

         <p class="error"><?php echo $_GET['error']; ?></p>

         <?php } ?>
            <div class="field">
               <input type="text" name="uname" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="content">
            </div>
            <div class="field">
               <input type="submit" name="btnLogin" value="validate" onClick="validateform()">
            </div>
            <div class="signup-link">
               Not a member? <a href="signup.php">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>
