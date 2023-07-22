<?php

include('../database/Connectiondb.php');

$SQL = "SELECT * FROM categorie";
$exeSQL = mysqli_query($conn, $SQL);

if (!$exeSQL) {
    $response = array("Message" => "Error executing the query");
} else {
    $data = array();
    while ($row = mysqli_fetch_assoc($exeSQL)) {
        $data[] = $row;
    }
    $response = $data;
}

header('Content-Type: application/json');
echo json_encode($response);
?>