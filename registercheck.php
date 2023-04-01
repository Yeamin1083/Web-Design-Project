<?php
 include "loginfo.php";

      if (isset($_POST['isSubmit'])){
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pwd = $_POST['psw'];
        $repwd = $_POST['repsw'];
        
        if($pwd===$repwd) {
          $sql = "INSERT INTO users(username,email,password)
          VALUES('$uname','$email','$pwd')";
          if(mysqli_query($conn,$sql)){
              header("Location: login.php");
          }
        }
        else{
            header("Location: Register.php");
        }
       }
?>