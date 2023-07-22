<?php
$conn = mysqli_connect('http://192.168.137.77:80', 'root', '');
$database = mysqli_select_db($conn, 'gestion_abonnement');

$encodedData = file_get_contents('php://input');  // take data from react native fetch API
$decodedData = json_decode($encodedData, true);
