<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "laurebonnevalle_soutienPDO";
$connexionString = "mysql:host=$host$;port=$port;dbname=$dbname";

$user = "laurebonnevalle";
$password = "votre_password";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

