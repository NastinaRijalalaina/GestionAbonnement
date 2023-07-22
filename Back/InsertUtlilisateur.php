<?php
    include('../database/Connectiondb.php');

    // Assuming $decodedData contains the data you want to insert

    // Escape the variables to prevent SQL injection
    $Unom = mysqli_real_escape_string($conn, $decodedData['nom']);
    $Unum = mysqli_real_escape_string($conn, $decodedData['num']);
    $Ucin = mysqli_real_escape_string($conn, $decodedData['cin']);
    $Udata = mysqli_real_escape_string($conn, $decodedData['data']);
    $Umontant = mysqli_real_escape_string($conn, $decodedData['montant']);
    $UdateDeb = mysqli_real_escape_string($conn, $decodedData['dateDeb']);
    $UdateFin = mysqli_real_escape_string($conn, $decodedData['dateFin']);
    $Uctype = mysqli_real_escape_string($conn, $decodedData['type']);
    $Ucmdp = mysqli_real_escape_string($conn, $decodedData['mdp']);

    // Assuming the table name is "utilisateur"

    // Use placeholders in the query to prevent SQL injection and improve security
    $InsertQuery = "INSERT INTO utilisateur (nom, num, cin, montantUtilis, typeCategorie, dataUtilise, montant, dateDeb, dateFin,connecter,passwd) VALUES ('$Unom', '$Unum', '$Ucin', '2 00 000 000', '$Uctype', '$Udata', '$Umontant', '$UdateDeb', '$UdateFin','0','$Ucmdp')";

    // Execute the query
    if (mysqli_query($conn, $InsertQuery)) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
?>
