<?php 
	$auth = parse_ini_file('auth.conf');
	$mysqli = new mysqli("localhost", $auth["username"], $auth["password"], "programming_club");
	if ($mysqli->connect_errno) {
		echo "Failed to connect to database";
		die();
	}
	if 	(!isset($_GET["type"])) {
		$type = "projects";
	} else {
		$type = $_GET["type"];
	}
	$accepted_values = array("projects","ideas","blog");
	if (!in_array($type, $accepted_values)) {
		$type = "projects";
	}
	$result = $mysqli->query("SELECT * FROM ".$type) or die($mysqli->error);
	
	$output = array();
	while($row=$result->fetch_assoc()) {
		$output[]=$row;
	}
    print(json_encode($output));
    $mysqli->close();
?>
