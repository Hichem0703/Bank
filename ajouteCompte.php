<?php
    require "db_connexion.php";
    ob_start();

    try {
        $conn =  conn();
        $stmt = $conn->prepare("INSERT INTO comptes (id_client, numero_compte, solde)
        VALUES (:id_client, :numero_compte, :solde)");


        
        $stmt->bindParam(':id_client', $id_client);
        $stmt->bindParam(':numero_compte', $numero_compte);
        $stmt->bindParam(':solde', $solde);
    
        $id_client = htmlspecialchars($_POST['id_client']);
        $numero_compte = htmlspecialchars($_POST['numeroCompte']);
        $solde = htmlspecialchars($_POST['solde']);
        $stmt->execute();
    } 
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>    
 