<?php


    class Promotion {
        private $id;
        private $name;

        public function getId(){
            return $this->id;
        }
        public function setId(){
            $this->id = $id;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
    }


?>