<?php

include('../models/NewDatabase.php');
$db = new Database();
$db->connect();
$db->sql('SELECT id, username FROM users');
$res = $db->getResult();
foreach($res as $output){
	echo $output["username"]."<br />";
}