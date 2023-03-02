<?php
    class Person
    {
        private $name;
        private $nationalID;

        public function __construct($personName, $ID)
        {
            $this->name = strtoupper($personName);
            $this->nationalID = $ID;
        }
        public function Getname(){
            return $this->name;
        }
        public function SetName($newName){
            $this->name = strtoupper($newName);
        }
        public function GetNationalID(){
            return $this->nationalID;
        }
    }
?>