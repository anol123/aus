<!DOCTYPE html>

<html lang="en" dir="ltr">
<style >
  body{
    text-align:center;
    background-color:aliceblue;
    background-size: cover;
  }
  .header{

    background-color:aliceblue;

    margin:0px;
    padding: 0px;
    height:100px;
    width:100%;
    margin-top: 0px;
    display:flex;
    flex-wrap:wrap;

  }

  .left {
      /* display: inline-block; */
      /* border: 2px solid red; */
      position: absolute;
      left: 60px;
      top: 30px;
      display:flex;
      flex-wrap:wrap;
  }

  .left img {
      width: 100px;
      height: 70px;
      /* filter: invert(100%); */
  }

  .left span {
      /* line-height: 19px; */
      font-size: 35px;
      text-align: center;

  }

  .mid {
      display: block;
      width: 36%;
      margin:10px auto;
      top-margin:0px;

      /* border: 2px solid green; */
  }

  .right {
      position: absolute;
      right: 34px;
      top: 43px;
      /* display: inline-block; */

      /* border: 2px solid yellow; */
  }
  .main{
    background-color: lightgreen;
  }
</style>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="header">

        <div class="left">
            <img src="logo_2.png" alt="">

        </div>

        <div class="mid">
            <h1>Assam University, Silchar</h1>
        </div>


        <!-- <div class="right">
            <h3>Examination website</h3>
        </div> -->
    </div>

    <?php

        $c=$_POST['email'];
          $d=$_POST['password'];
    $servername = "localhost";
$username = "root";
$password = "password@123";
$dbname = "university";

// Create connection
$conn = mysql_connect($servername, $username, $password);
if(!$conn){
  echo "unable to connect to database";
  exit();
}
// else echo "connect to database";
$db=mysql_select_db($dbname,$conn);
if(!db){
  echo "unable to connect to database";
  exit();
}
// else echo "Registered successfully";

$sql = "SELECT * FROM student WHERE email_id='$c' AND password='$d'";
$result=mysql_query($sql);
$row= mysql_fetch_array($result);
if($row["email_id"]==$c && $row["password"]==$d){
  ?>
  <header class="header">
    <div class="mid">
      <h1>Assam University,Silchar</h1>
    </div>
    <div class="right">
        <h3><a href="login.html">logout</a></h3>
    </div>
  </header>
  <div class="main">
  <h1>Welcome <?php echo $row["name"]; ?></h1>
  </div>
  <hr>
  <p>Roll Number: <?php echo $row["roll_no"]; ?></p>
  <hr>
  <p>Email Id: <?php echo  $row["email_id"]; ?></p>
  <hr>
  <p>Password: <?php echo  $row["password"]; ?></p>
  <hr>
  <p>CGPA: <?php echo  $row["cgpa"]; ?></p>

<?php }

else {
echo "invalid password or email id";
}

$conn->close();
     ?> -->

  </body>
</html>
