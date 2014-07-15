<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmployeeSalaryCalculation
 *
 * @author LAB5PC18
 */
class EmployeeSalaryCalculation {
    public $employee_name;
    public $basic_amount;
    public $house_rent;
    public $medical_allowance;
    
    public function salary_of_an_employee()
    {
         
         $house_rent_of_an_employee = ($this->basic_amount*$this->house_rent/100);
         $medical_allownce_of_an_employee = ($this->basic_amount*$this->medical_allowance/100);
         $salary_of_an_employee_without_Basic = $house_rent_of_an_employee+$medical_allownce_of_an_employee;
         $total_salary_amount_of_an_employee = $this->basic_amount + $salary_of_an_employee_without_Basic;
         
         return $total_salary_amount_of_an_employee;
         
    }
    
}
