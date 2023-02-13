<?php
    require "db_connexion.php";
    // require "Client.php";

    try {
        $conn = conn();
        $stmt = $conn->prepare("INSERT INTO clients (nom, prenom,  telephone, adresse)
        VALUES (:nom, :prenom, :telephone, :adresse)");

        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':adresse', $adresse);

        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $stmt->execute();
    }
    catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
?>