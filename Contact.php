<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.image{
  float:right; 
   cursor:grab;
}

.b{
    background-color:brown;
    color:white;
    text-align: center;
    }
    .last{
      margin-left:35px;
    }
</style>
</head>
<body>
  
  <?php include 'navbar.php'; ?>


    <div class="image">
    <p><img src="./mg.jpg" alt="mg"></p>
    </div>
    <div class="last" style="color:black">
      <h1>TELL US ABOUT YOU!</h1>
      
      <form action="contactwork.php" method="post">
      <b><label for="names">Name:</label></b>
      <input  type="text" id="names" name="names"><br><br>

      <b><label for="email">Your Email:</label></b>
      <input type="email" id="email" name="email"><br><br>
      
      <b><label for="pwd">Password:</label>
      <input type="password" id="pwd" name="pwd"><br><br>
      
      <b><label for="birthday">Date of Birth:</label></b>
      <input type="date" id="birthday" name="bd"><br><br>

      <b><label for="pass">Your City</label></b>
      <select name="pass" id="pass">
      <option value="Dhaka" name="pass">Dhaka</option>
      <option value="Chittagong" name="pass">Chittagong</option>
      <option value="Khulna" name="pass">Khulna</option>
      <option value="Sylhet" name="pass">Sylhet</option>
      <option value="Rangpur" name="pass">Rangpur</option>
      <option value="Rajshahi" name="pass">Rajshahi</option>
      <option value="Barishal" name="pass">Barishal</option>
      <option value="Mymenshingh" name="pass">Mymenshingh</option>
      </select><br>

      <b><p>Select Your Car: </p>
      <input type="checkbox" value="MG3" name="car" id="car">
      <label for="Dept1">MG3</label>
      <input type="checkbox" value="MG ZS" name="car" id="car">
      <label for="Dept2">MG ZS</label>
      <input type="checkbox" value="MG HS" name="car" id="car">
      <label for="Dept3">MG HS</label>
      </select><br>

      </select>
      <b><p>Services: </p>
      <input type="radio" value="Engine" name="season">
      <label for="Semester">Engine</label>
      <input type="radio" value="Body" name="season">
      <label for="Semester">Body</label>
      <input type="radio" value="Interior" name="season">
      <label for="Semester">Interior</label></p>
      </select><br>
      <textarea id="textarea" name="txt" rows="4" cols="50">
      </textarea><br>
      <input type="submit" value="Submit" name="isSubmit">
      <input type="Reset" value="Reset"></p>

    </form>  
    </div>
      <div class="b">
      <b>RANCON MG MOTOR
        215,
        Bir Uttam Mir Shawkat Sarak,
        Dhaka 1208,
        Bangladesh
        </b>
        <p>Opening hours :   9:00 AM – 8:00 PM, Saturday to Friday. Closed on Bank Holidays.</p>    
        <b> ENQUIRIES AND BOOKING :   +8809617454545.</b>
       </div>

</body>
</html>
