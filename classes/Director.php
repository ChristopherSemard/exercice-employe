<?php

require_once('./classes/Employee.php');


class Director extends Employee
{

    public function getAnnualBonus() {
        $hiringYears = $this->getHiringYears();
        $baseBonus = $this->wage * 1000 * 0.07;
        $seniorityBonus = $hiringYears * ($this->wage * 1000 *0.03);
        $annualBonus = $baseBonus + $seniorityBonus;
        return $annualBonus;
    }
}