<?php require_once('/classes/Employee.php')


$employee1 = new Employee("Martin", "Roger", "10/2/2000", "Commercial", 25, "Commercial");

$employee2 = new Employee("Lafond", "Bruce", "18/6/2015", "Comptable", 18, "Comptabilité");

$employee3 = new Employee("Colin", "Maxence", "28/11/2010", "Commercial", 22, "Commercial");




$employee1->getHiringYears()
