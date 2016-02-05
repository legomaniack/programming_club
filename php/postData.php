<?php
	$auth = parse_ini_file('auth.conf');
	$mysqli = new mysqli("localhost", $auth["username"], $auth["password"], "programming_club");
	if ($mysqli->connect_errno) {
		echo "Failed to connect to database";
		die();
	}
	
	if 	(isset($_GET["type"]) and isset($_POST["mode"])) {
		$type = $_GET["type"];
		$mode = $_POST["mode"];
	} else {
		echo "Type and/or mode not set";
		die();
	}
	$accepted_values = array("projects","ideas","blog");
	if (!in_array($type, $accepted_values)) {
		echo "Invalid type"; 		
		die();
	}
	
	$values = array("title"=>"", "img"=>"", "text"=>"");
	foreach ($values as $key => $value) {
		if (isset($_POST[$key])) {
			$values[$key] = $_POST[$key];
		}
	}

	mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT);
	if ($mode == "edit") {
		if 	(!isset($_POST["id"]) || $_POST["id"] == "") { 
			echo "Edit id not set";
			die(); 
		}
		$id = $_POST["id"];
		
		$stmt = $mysqli->prepare("UPDATE ".$type." SET title=?, img=?, text=? WHERE id=?");
		$stmt->bind_param('sssi', $values["title"], $values["img"], $values["text"], $id);
		
	} elseif ($mode == "new") { 
		$stmt = $mysqli->prepare("INSERT INTO ".$type." (title,img,text) VALUES (?, ?, ?)");
		$stmt->bind_param('sss', $values["title"], $values["img"], $values["text"]);
	} elseif ($mode == "del") {
		if 	(!isset($_POST["id"]) || $_POST["id"] == "") { 
			echo "Delete id not set";
			die(); 
		}
		$id = $_POST["id"];
		$stmt = $mysqli->prepare("DELETE FROM ".$type." WHERE id=?");
		$stmt->bind_param('i', $id);
		echo "ID:".$id;
	}


	$result = $stmt->execute();	

	//var_dump($stmt);

	$stmt->close();
	$mysqli->close();
?>
