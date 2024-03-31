<?php
$serverName = "CHAMCHAM\SQLEXPRESS"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"Booking");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br/>"; 
     // display strings within paragraph with different color.
echo "<p> <font color=blue font face='arial' size='2pt'>Welcome You have been Login in successfully</font> </p>";
echo "<p> <font color=red font face='verdana' size='5pt'>Welcome you have been login successfully</font> </p>";
echo "<p> <font color=green font face='courier' size='6pt'>Welcome you have been login successfully</font> </p>";
}else{
     echo "Connection could not be established.<br/>";
     die( print_r( sqlsrv_errors(), true));
}
?>
