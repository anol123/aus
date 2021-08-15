<?php

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

$sql = "SELECT * FROM teacher";
$result=mysql_query($sql);
// $row= mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

</head>
<style>
    table {
        margin: 0 auto;
        font-size: large;
        border: 1px solid black;
    }

    h1 {
        text-align: center;
        color: navy;
        font-size: xx-large;
        font-family: 'sans-serif';
    }

    td {
        background-color: lightblue;
        border: 1px solid black;
    }
    tr{
      background-color: lightyellow;
    }

    th,
    td {
        font-weight: bold;
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }

    td {
        font-weight: lighter;
    }
</style>
<body>
    <section>
        <h1>Teacher Details</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Name</th>
                <th>Id No.</th>
                <th>Email Id</th>
                <th>Password</th>
                <th>Address</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA
                while($rows=mysql_fetch_array($result))
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['id_no'];?></td>
                <td><?php echo $rows['email_id'];?></td>
                <td><?php echo $rows['password'];?></td>
                <td><?php echo $rows['address'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
  </body>
</html>
