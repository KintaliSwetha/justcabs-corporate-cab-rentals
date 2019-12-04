<?php
$servername='localhost';
$username='root';
$password='shandhar1729';
$dbname='justcabs';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn)
	die ('connection failed');
?>