<?php

    class Transaction {
        private $id_transaction;
        private $id_compte;
        private $somme;
        private $type_transaction;

        public function getIdTransaction(){
            return $this->id_transaction;
        }
     
        public function setIdTransaction($id_transaction){
            $this->id_transaction=$id_transaction;
        }

        public function getIdCompte(){
            return $this->id_compte;
        }

        public function setIdCompte($id_compte){
            $this->id_compte=$id_compte;
        }

        public function getSomme(){
            return $this->somme;
        }

        public function setSomme($somme) {
            $this->somme=$somme;
        }

        public function getTypeTransaction(){
            return $this->type_transaction;
        }

        public function setTypeTransaction($type_transaction){
            $this->type_transaction=$type_transaction;
        }
    }
?>