<?php

    class Client {
        private $id_client;
        private $nom;
        private $prenom;
        private $telephone;
        private $adresse;

        public function getIdClient(){
            return $this->id_client;
        }
     
         public function setIdClient($id_client){
             $this->id_client=$id_client;
        }

        public function getNom(){
            return $this->nom;
        }

        public function setNom($nom) {
            $this->nom=$nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function setPrenom($prenom){
            $this->prenom=$prenom;
        }

        public function getTelephone(){
            return $this->telephone;
        }

        public function setTelephone($telephone){
            $this->telephone=$telephone;
        }

        public function getAdresse(){
            return $this->adresse;
        }

        public function setAdresse($adresse){
            $this->adresse=$adresse;
        }
    }
?>