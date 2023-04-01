
<?php
include "loginfo.php";

    if(isset($_POST['isSubmit'])){
        $name = $_POST['names'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $birthday = $_POST['bd'];
        $pass = $_POST['pass'];
        $checkbox = $_POST['car'];
        $radio = $_POST['season'];
        $textarea = $_POST['txt'];
       /* echo "Your Name is ".$name.'<br>';
        echo "Your Email is ".$email.'<br>';
        echo "Your Password is ".$pwd.'<br>';
        echo "Your City is ".$pass.'<br>';
        echo "Your Selected car is ".$checkbox.'<br>';
        echo "Availabe Services ".$radio.'<br>';
        echo "Your comment ".$textarea.'<br>';*/
        $sql = "INSERT INTO contactinfo(names,email,pwd,birthday,pass,checkbox,radio,textarea)
        VALUES('$name','$email','$pwd','$birthday','$pass','$checkbox','$radio','$textarea')";
        if(mysqli_query($conn,$sql)){
            header("Location: about.php?success");
        
        }
        else{
        echo "Data is'nt save";
        }
   }
?>