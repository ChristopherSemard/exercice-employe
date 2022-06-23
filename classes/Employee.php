<?php

class Employee
{
    public string $lastname
    public string $firstname
    public string $hiringDate
    public string $role
    public int $wage
    public string $department

    public function __construct($lastname, $firstname, $hiringDate, $role, $wage, $department)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->hiringDate = $hiringDate;
        $this->role = $role;
        $this->wage = $wage;
        $this->department = $department;
    }

    public function getHiringYears() {
        $test = new Date(this->hiringDate)
        echo "<script>console.log('Console: " . $test . "' );</script>";
    }

}
