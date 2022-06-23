<?php 

require_once('./classes/Agency.php');
require_once('./classes/Employee.php');

// Agences
$agency1 = new Agency('Agency 1', 'Address 1', '76000', 'Rouen', 'Restaurant');
$agency2 = new Agency('Agency 2', 'Address 1', '75000', 'Paris', 'Tickets restaurants');

// Tableau des agences
$agenciesTable = array($agency1, $agency2);

// Employés
$employee1 = new Employee("Martin", "Roger", "2/10/2000", "Commercial", 25, "Commercial", $agency1);
$employee2 = new Employee("Lafond", "Bruce", "6/18/2015", "Comptable", 18, "Comptabilité", $agency1);
$employee3 = new Employee("Colin", "Maxence", "11/28/2010", "Commercial", 22, "Commercial", $agency2);
$employee4 = new Employee("Colin", "Arthur", "5/12/2019", "Directeur RH", 35, "Administration", $agency1);
$employee5 = new Employee("Bordeaux", "Sidney", "12/30/2008", "Gardien de nuit", 15, "Securité", $agency2);

// Tableau des employés
$employeesTable = array($employee1, $employee2, $employee3, $employee4, $employee5);

// QUESTION 2
// print_r("L'employé a été embauché il y a " .$employee1->getHiringYears(). " ans.");

// QUESTION 3
// sendBonus($employeesTable);

// function sendBonus($employeesTable){
//     $today = new DateTime();
//     if($today->format('d/m') == "23/06"){
//         foreach ($employeesTable as $key => $employee) {
//             print_r("\n[VIREMENT BANCAIRE] " .$employee->getAnnualBonus(). "€ vers " .$employee->firstname." " .$employee->lastname);
//         }
//     }
//     else {
//         print_r("\nCe n'est pas le jour des primes");
//     }
// }

// QUESTION 4
// Afficher nombre employés
// print_r("Il y a actuellement ".count($employeesTable)." employés dans l'entreprise");

// Afficher employés triés par nom puis par prénom
// array_multisort(array_column( $employeesTable, 'lastname' ), SORT_ASC,array_column( $employeesTable, 'firstname' ), SORT_ASC, $employeesTable);
// print_r($employeesTable);

// Afficher employés triés par service, puis par nom puis par prénom
// array_multisort(array_column( $employeesTable, 'department' ), SORT_ASC,array_column( $employeesTable, 'lastname' ), SORT_ASC,array_column( $employeesTable, 'firstname' ), SORT_ASC, $employeesTable);
// print_r($employeesTable);

// Affiche masse salariale totale
// $totalWages = 0;
// foreach ($employeesTable as $key => $employee) {
//     $employeeWage =  $employee->getAnnualBonus() + $employee->wage * 1000;
//     print_r("\n".$employeeWage);
//     $totalWages += $employeeWage;
// }
// print_r("\n----------\nTotal de la masse salariale de l'entreprise cette année : ".$totalWages."€");


// QUESTION 6
// foreach ($employeesTable as $key => $employee) {
//             print_r("\nLe mode de restauration de l'agence de ".$employee->firstname." " .$employee->lastname. " est " . $employee->agency->restaurationType);
// }













