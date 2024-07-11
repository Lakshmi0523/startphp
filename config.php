/*<?php
$dbhost = "starttooldev01.mysql.database.azure.com";
$dbname = "startdb";
$dbuser = "srtadmin01";
$dbpass ="Ugw6h1daE5";
echo"conect database";
$conn = mysqli_init();
//mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
$link= @mysqli_connect($conn, 'starttooldev01.mysql.database.azure.com', 'srtadmin01', 'Ugw6h1daE5', 'startdb', 3306, MYSQLI_CLIENT_SSL);
//$link = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
echo"Connection happing here";
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
die('Failed to connect to MySQL: '.mysqli_connect_error());
exit();
}


//$link = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//if (mysqli_connect_errno()) {
	// echo "Failed to connect to MySQL: " . mysqli_connect_error();
	//exit();
//}
?>*/


<?php
// Initialize MySQL connection
$conn = mysqli_init();

if (!$conn) {
    die('MySQL initialization failed');
}

// Set SSL options
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

// Establish a connection
$connected = mysqli_real_connect(
    $conn,
    'starttooldev01.mysql.database.azure.com', // Host
    'srtadmin01',                             // Username
    'Ugw6h1daE5',                             // Password
    'startdb',                                // Database
    3306,                                     // Port
    NULL,                                     // Socket
    MYSQLI_CLIENT_SSL                         // Flags
);

if (!$connected) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

echo "Connection successful";

?>
