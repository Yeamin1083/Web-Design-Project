<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.back{
        background-image: url("ing.jpg");   
        background-position: center;
        width:1350px;
        height: 800px;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
      }



* {
  box-sizing: border-box;  
}

.menu {
  width: 150px;
}

.content {
  width: 250px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 15px;
  margin-bottom: 8px;
  margin-left: 10px;
  margin-top: 15px;
  background-color:brown;
  color: white;
}

.menu li:hover {
  background-color:green; 
   
}  

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 95%;
  margin:8px
}

td, th {
  border: 1px solid white;
  text-align: left;
  padding: 8px;
  color: white;
}

tr:nth-child(even) {
  background-color: black;
}
.b{
    background-color:brown;
    color:white;
    text-align: center;
    }
    .design{
      color:white;
      text-align: center;
    }
</style>
</head>
<body>
     <?php include 'navbar.php'; ?>

  <?php include 'loginfo.php'; 
        $sql = "SELECT * FROM contactinfo";
        $result = mysqli_query($conn, $sql);
    ?>

    <div class="back">

<br>
  <div class="clearfix">
    <div class="column menu">
      <ul> 
        <li href="http://mgmotor.com.bd/home/history_mg/">Contact</li>       
        <li>History of MG</li>
        <li>Policy</li>
        <li>About</li>
        </ul>
    </div>
  </div>
  <table>
  <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Birthday</th>
      <th>Select</th>
      <th>checkbox</th>
      <th>Radio</th>
      <th>Text Area</th>
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
      <td><?php echo $row['names'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['pwd'];?></td>
      <td><?php echo $row['birthday'];?></td>
      <td><?php echo $row['pass'];?></td>
      <td><?php echo $row['checkbox'];?></td>
      <td><?php echo $row['radio'];?></td>
      <td><?php echo $row['textarea'];?></td>
    </tr>
    <?php endwhile; ?>
    
 
  </table>
  <div class=design>
  <h1>DESIGN CENTRE</h1>
  <b>Led by European Advanced Design Director, Carl Gotham, the UK team is responsible for the interior and exterior design of all MG products across the globe. 
    The dedicated 25-strong team works in a new state-of-the-art facility which opened in London in September 2018.
     It takes designs from 2D rendering through to virtual reality. </b>
  </div>
</div>
    

</body>
</html>
