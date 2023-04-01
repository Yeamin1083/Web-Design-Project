
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  
    .back{
        background-image: url("log1.jpg");   
        background-position: center;
        width:1300px;
        height: 680px;
        color:white;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        
      }
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 8px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px ;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px ;
  border: none;
  cursor: pointer;
  width: 100%;
}


button:hover {
  opacity: 0.8;
}




.container {
  padding: 100px;
}

span.psw {
  float: right;
  padding-top: 20px;
}



@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  
}
</style>
</head>
<body>

    <form action="registercheck.php" method="post">
<div class="back">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <label for="repsw"><b>Confirm Password</b></label>
    <input type="password" placeholder="Enter Password Again" name="repsw" required>
    <button name="isSubmit" type="submit">Create Account</button>
    <button name="isSubmit" onclick="location.href='login.php'" type="submit">Already have an Account?</button>
    <label>
     <input  type="checkbox" checked="checked" name="remember" > Save your Password
    </label>
   
</div>
</div>


</body>
</html>
