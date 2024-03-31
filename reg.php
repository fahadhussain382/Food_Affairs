<?php
    include("config.php");
?>
<?php
 echo $_POST['name'];
 echo "<br>";
echo "Your Booking has been Confirmed....";
$gets = "insert into regist values ('$_POST[name]','$_POST[lname]','$_POST[email]',$_POST[number],'$_POST[password]','$_POST[cpassword]')";
															
															$runs = sqlsrv_query($conn, $gets ,array(), array( "Scrollable" => 'static' ));
															if(!$runs)
															{
																die("QUERY FAILED" . print_r( sqlsrv_errors(), true));
															}  
?>