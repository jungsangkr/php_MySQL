<?php

$user = "db";
$password = "ПАРОЛЬ";

try {
	$db = new PDO("localhost;dbname=БАЗА", $user, $password);
} catch (Exception $e) {
	echo $e->getMessage();
}
