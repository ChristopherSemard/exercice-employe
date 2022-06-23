<?php 

require_once('./classes/Employee.php');

// Employés
$employee1 = new Employee("Martin", "Roger", "2/10/2000", "Commercial", 25, "Commercial");
$employee2 = new Employee("Lafond", "Bruce", "6/18/2015", "Comptable", 18, "Comptabilité");
$employee3 = new Employee("Colin", "Maxence", "11/28/2010", "Commercial", 22, "Commercial");
$employee4 = new Employee("Bisson", "Arthur", "5/12/2019", "Directeur RH", 35, "Administration");
$employee5 = new Employee("Bordeaux", "Sidney", "12/30/2008", "Gardien de nuit", 15, "Securité");

// Tableau des employés
$employeesTable = array($employee1, $employee2, $employee3, $employee4, $employee5);

// QUESTION 2
// print_r("L'employé a été embauché il y a " .$employee1->getHiringYears(). " ans.");

// QUESTION 3
sendBonus($employeesTable);

function sendBonus($employeesTable){
    $today = new DateTime();
    if($today->format('d/m') == "23/06"){
        foreach ($employeesTable as $key => $employee) {
            print_r("\n[VIREMENT BANCAIRE] " .$employee->getAnnualBonus(). "€ vers " .$employee->firstname." " .$employee->lastname);
        }
    }
    else {
        print_r("\nCe n'est pas le jour des primes");
    }
}
