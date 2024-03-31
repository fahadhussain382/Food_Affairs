<?php
    include("config.php");
?>
<?php
#catches user/password submitted by html form
$email = $_POST['email'];
$password = $_POST['password'];

#checks if the html form is filled
if(empty($_POST['email']) || empty($_POST['password']))
{
echo "Fill all the fields!";
}
else
{
#searches for email and password in the database
$issget = "SELECT  [email]
,[password] FROM [dbo].[regist] WHERE email ='{$email}' AND password ='{$password}'";
$result = sqlsrv_query($conn, $issget); 
} 
#checks if the search was made
if($result === false)
{
  echo "<scraipt>alert(0)</script>";
 die( print_r( sqlsrv_errors(), true));
}

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1)
{
  echo"<script>alert('ASDASDASD')</script>";
  header('location: login.html');
}
else{
  header('location: login.php');
  echo"<script>alert(0)</script>";
}
?>