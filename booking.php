<?php
    include("config.php");
?>
<?php
 echo $_POST['name'];
 echo "<br>";
echo "Your Booking has been Confirmed....";
$gets = "insert into name values ('$_POST[name]','$_POST[lname]','$_POST[email]',$_POST[number],'$_POST[date]','$_POST[time]','$_POST[address]','$_POST[note]','$_POST[Event]','$_POST[Placement]','$_POST[Packages]','$_POST[table1]')";
															
															$runs = sqlsrv_query($conn, $gets ,array(), array( "Scrollable" => 'static' ));
															if(!$runs)
															{
																die("QUERY FAILED" . print_r( sqlsrv_errors(), true));
															}  
?>