<?php
    // ob_start();
?>
    <div class="container mt-5">
        <form action="ajouteClient.php" method="post">
            <div class="mb-4">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp" required placeholder="Votre nom">
            </div>
            <div class="mb-4">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="emailHelp" required placeholder="Votre prénom">
            </div>
            <div class="mb-4">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="number" class="form-control" id="telephone" name="telephone" aria-describedby="emailHelp" required placeholder="Votre téléphone">
            </div>
            <div class="mb-4">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" aria-describedby="emailHelp" required placeholder="Votre adresse">
            </div>
            
            <button type="submit" class="btn btn-primary mb-3">Ajouter</button>
        </form>
    </div>

<?php
    // $content = ob_get_clean();
    require "template.php";
?>