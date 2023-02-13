<?php

    class Compte {
        private $id_compte;
        private $id_client;
        private $numero_compte;
        private $solde;

        public function getIdCompte(){
            return $this->id_compte;
        }

        public function setIdCompte($id_compte){
            $this->id_compte=$id_compte;
        }

        public function getIdClient(){
            return $this->id_client;
        }
     
        public function setIdClient($id_client){
            $this->id_client=$id_client;
        }

        public function getNumeroCompte(){
            return $this->numero_compte;
        }

        public function setNumeroCompte($numero_compte) {
            $this->numero_compte=$numero_compte;
        }

        public function getSolde(){
            return $this->solde;
        }

        public function setSolde($solde){
            $this->solde=$solde;
        }
    }
?>