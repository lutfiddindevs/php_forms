<?php 

function checkDetails($details) {
	if (empty($details)) {
		die("User details are empty");
	}
}

function checkFile($file) {
	if (!$file) {
		die("DB file doesn't exist");
	}
}
function setDb($db) {
    $db = fopen("db.json", "w");
    $content = fwrite($db, json_encode($db, JSON_PRETTY_PRINT));
    fclose($db);
     	
}

function register_user($user_details = []) {
	 checkDetails($user_details);
	 $current_content = file_get_contents("db.json");
	 checkFile($current_content);
	 $current_db = json_decode($current_content, true);
     $current_db['users'][] = $user_details;
     setDb($current_db);
}
