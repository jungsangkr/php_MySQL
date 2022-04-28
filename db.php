<?php

$user = "u1387845_db";
$password = "tW6vJ6tP5n";

try {
	$db = new PDO("mysql:host=server253.hosting.reg.ru;dbname=u1387845_db", $user, $password);
} catch (Exception $e) {
	echo $e->getMessage();
}
