<?php
    // ob_start();
    require "Client.php";
    require "db_connexion.php";
?>
    <div class="container mt-5">
        <form action="ajouteCompte.php" method="post">
            <div class="mb-4">
                <div class="dropdown mt-5">
                    <select class="btn btn-warning dropdown-toggle" name="id_client" aria-expanded="false">
                    <option selected>Client</option>
    
                        <?php
                            
                            $data = [];
                            $conn = conn();
                            $req = ("SELECT * FROM clients");
                            $reponse = $conn->query($req);
                            $data = $reponse->fetchAll(PDO::FETCH_CLASS, 'Client');
                            foreach($data as $client){
                        ?>
                            <option value="<?=$client->getIdClient()?>"><?=$client->getNom()?></option>
                                
                        <?php
                            }
                        ?>

                    </select>
                </div>    
            </div>
            <div class="mb-4">
                <label for="numeroCompte" class="form-label">Numéro compte</label>
                <input type="text" class="form-control" id="numeroCompte" name="numeroCompte" aria-describedby="emailHelp" required placeholder="Entrez numéro compte">
            </div>
            <div class="mb-4">
                <label for="solde" class="form-label">Solde</label>
                <input type="text" class="form-control" id="sole" name="solde" aria-describedby="emailHelp" required placeholder="Entrez le solde">
            </div>
            
            <button type="submit" class="btn btn-primary mb-3">Ajouter</button>
        </form>
    </div>

<?php
    // $content = ob_get_clean();
    require "template.php";
?>