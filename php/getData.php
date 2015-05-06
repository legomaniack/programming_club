<?php 
	$auth = parse_ini_file('auth.conf');
	$mysqli = new mysqli("localhost", $auth["username"], $auth["password"], "programming_club");
	if ($mysqli->connect_errno) {
		echo "Failed to connect to database";
	}
	if 	(!isset($_GET["type"])) {
		$type = "projects";
	} else {
		$type = $_GET["type"];
	}
	$accepted_values = array("projects","ideas");
	if (!in_array($type, $accepted_values) $type = "projects";
	
	$result = $mysqli->query("SELECT * FROM ."$type) or die($mysqli->error);
	
	while($row=$mysqli->fetch_assoc($result))
		$output[]=$row;
    print(json_encode($output));
    $mysqli->close();
?>
