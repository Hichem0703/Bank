<?php
    // ob_start();
?>
    <div class="container mt-5">
        <form action="" method="post">
            <div class="mb-4">
                <label for="IdCompte" class="form-label">Id compte</label>
                <input type="text" class="form-control" id="IdCompte" name="IdCompte" aria-describedby="emailHelp" required placeholder="Entrez id client">
            </div>
            <div class="mb-4">
                <label for="somme" class="form-label">Somme</label>
                <input type="text" class="form-control" id="somme" name="somme" aria-describedby="emailHelp" required placeholder="Entrez la somme">
            </div>
            <div class="mb-4">
                <label for="typeTransaction" class="form-label">Type de transaction</label>
                <input type="text" class="form-control" id="typeTransaction" name="typeTransaction" aria-describedby="emailHelp" required placeholder="Entrez type de transaction">
            </div>
            
            <button type="submit" class="btn btn-primary mb-3">Ajouter</button>
        </form>
    </div>

<?php
    // $content = ob_get_clean();
    require "template.php";
?>