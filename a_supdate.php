<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
  $a=$_POST['roll_no'];
  $b=$_POST['id_no'];
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
// else  echo "Registered successfully";
// $sql = "SELECT * FROM student WHERE email_id='$c'";
// $result=mysql_query($sql);
// $row= mysql_fetch_array($result);
// if($row == 0){
//   echo "Deletion not successful";
// }
// else{
  $sql = "DELETE from student  WHERE roll_no= $a";
  $output=mysql_query($sql);
  if(!$output){
    echo "Deletion not successful";
  }

  else{

    echo "Deleted successfully";
  }
//}


$conn->close();
     ?>
  </body>
</html>
