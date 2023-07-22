<?php
include('../database/Connectiondb.php');

// Récupérer les données envoyées par l'application React Native
$catId = $decodedData['id'];
$catnom = $decodedData['nom'];
$catnum = $decodedData['num'];
$catcin = $decodedData['cin'];
 // Supposons que l'application envoie également l'ID de l'enregistrement à mettre à jour

// Requête SQL pour faire l'update
$UpdateQuerry = "UPDATE utilisateur SET nom='$catnom', num='$catnum', cin='$catcin' WHERE id='$catId'";

// Exécuter la requête
if (mysqli_query($conn, $UpdateQuerry)) {
    // L'update a réussi
    $response = array('success' => true, 'message' => 'Update successful');
} else {
    // L'update a échoué
    $response = array('success' => false, 'message' => 'Update failed: ' . mysqli_error($conn));
}

// Renvoyer la réponse au format JSON
echo json_encode($response);

?>
