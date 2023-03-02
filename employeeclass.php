<?php
    require_once("personclass.php");

    class Employee extends Person
    {
        private $employeeID;
        private $department;
        public function __construct($employeeName, $nationalID, $dept)
        {
            parent::__construct($employeeName, $nationalID);
            $this->department = $dept;
            $this->employeeID = $this->GenerateEmployeeID();

        }
        public function GetEmployeeID(){
            return $this->employeeID;
        }
        public function GetDepartment(){
            return $this->department;
        }
        public function SetDepartment($dept){
            return $this->$dept;
        }
        private function GenerateEmployeeID(){
            static $IDGent = 1;
            return $IDGent++;
        }
    }
?>