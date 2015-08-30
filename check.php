
<h1>Server Info</h1>
<pre>
<?php
echo "Server IP: ".$_SERVER['SERVER_ADDR'] . " (". $_SERVER['HTTP_HOST'] .")";
echo "\nClient IP: ".$_SERVER['REMOTE_ADDR'];
echo "\nDocument Root: ".$_SERVER['DOCUMENT_ROOT'];
echo "\nX-Forwarded-for: ".$_SERVER['HTTP_X_FORWARDED_FOR'];

?>
</pre>

<h1>mysql check</h1>
<pre>
<?php
    $username = "check";
    $password = "check";
    $hostname = "sql.staging.visionps.net"; 
	
	echo "Username: " . $username;
	echo "\nPassword: " . $password;
	echo "\nHostname: " . $hostname;
?>


<?php
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
   or die "Unable to connect to $hostname";
  
echo "Connected to $hostname<br>";
?>

<?php
//execute the SQL query and return records
$result = mysql_query("SELECT @@hostname");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
   echo "sql server hostname:".$row{'@@hostname'};
}
?>


</pre>