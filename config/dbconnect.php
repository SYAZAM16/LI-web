<?php

/*$server = "localhost:3306";
$user = "root";
$password = "admin";
$db = "swiss_collection";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}*/


$db=  "(DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = 172.17.96.105)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = XEPDB1)
    )
  )";


$conn = oci_connect("mobil_apps","admin_123",$db); 

//echo "ok";
	if (! $conn) {
			// connection failed
			// as we don't have a connection yet the error is stored in the
			// module global error-handle
			$err = OCIError();

			if ($err[ "code" ] == "12545") {
				echo "target host or object does not exist\n";
			}
			die();

} 

?>