 <?php
$servername = "***";
$usernameDB = "***";
$passwordDB = "***";
$dbname = "***";
$SensorData = "***";

//

//DataFromQuery from device
$user = $_POST['user'];
$password = $_POST['password'];
$HUM = $_POST['HUM'];
$TEMP = $_POST['TEMP'];
$LIGHT = $_POST['LIGHT'];
$SOIL_HUM = $_POST['SOIL_HUM'];

if (empty($_POST)) {
	exit("DATA_ERROR");
}
else {
	if(!empty($user) && !empty($password) && !empty($HUM) && !empty($TEMP) && !empty($LIGHT) && !empty($SOIL_HUM)){
		// Create connection
		$conn = new mysqli($servername, $usernameDB , $passwordDB, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		//Connected to the database and sending the collected data:
		$sql = "INSERT INTO ".$SensorData." (HUM, TEMP, LIGHT, SOIL_HUM) VALUES ('".$HUM."', '".$TEMP."', '".$LIGHT."', '".$SOIL_HUM."')";

		if ($conn->query($sql) === TRUE) {
		    echo "DATA_RECEIVED_OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

	}

	else{
		echo "DATA_INCOMPLETE";
	}

}
?>