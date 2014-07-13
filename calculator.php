<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Calculator
 *
 * @author LAB5PC18
 */
class Calculator {
    public $principleAmount;
    public $annualInterestRate;
    public $timePeriod;
    
    
    public function totalAmountWithInterest()
    {
         $interestAmount = ($this->principleAmount*$this->annualInterestRate*$this->timePeriod)/100;
         $totalAmountAfterAddingInterest=  $this->principleAmount + $interestAmount;
         return $totalAmountAfterAddingInterest;
         
    }
}
