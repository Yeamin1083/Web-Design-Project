<?php
 include "loginfo.php";

      if (isset($_POST['isSubmit'])){
        $uname = $_POST['uname'];
        $pwd = $_POST['psw'];
        
        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pwd'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) === 1){
              header("Location: Welcome.php");
          }
        else{
          echo "Username or password is incorrect";
        }
       }
?>