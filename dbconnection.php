
<?php
    $sname="localhost";
    $uname="root";
    $password="";
    $db_name = "loginbuwa";
    $conn = mysqli_connect($sname, $uname, $password, $db_name);
    if (!$conn) {

        echo "Connection failed!";
        
    }

    if(isset($_POST["btnLogin"])){
        $username = $_POST['uname'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0){
           header ("location:home.php");
            // echo "Welcome";
        }
        else{
            echo ("Login failed");
        }

    }




    
?>
