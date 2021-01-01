<?php 
$filename = "db.json";
function store_user($user_details){
	$current_db_data = get_db();
	$current_db_data['user'][] = $user_details;
	set_db($current_db_data);
}

function set_db($db_data) {
	$json_data_string = json_encode($db_data, JSON_PRETTY_PRINT);
	file_put_contents($filename, $json_data_string);
}

function get_db() {
	return json_decode(file_get_contents($filename), true);
}