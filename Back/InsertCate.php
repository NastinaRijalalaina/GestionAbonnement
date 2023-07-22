<?php
        include('../database/Connectiondb.php');

        $catType = $decodedData['type'];
        $catDon = $decodedData['donner'];
        $catMo = $decodedData['montant'];

        $InsertQuerry = "INSERT INTO categorie(typecat,donner, montant) VALUES('$catType', '$catDon','$catMo')";
        $R = mysqli_query($conn, $InsertQuerry);

  
?>
