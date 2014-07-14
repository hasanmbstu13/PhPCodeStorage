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
    public $first_no;
    public $second_no;
    
    public function add_two_number()
    {
        $result_of_additon = $this->first_no+$this->second_no;
        return $result_of_additon;
    }
    
    public function subtract_two_number()
    {
        $result_of_subtraction = $this->first_no-$this->second_no;
        return $result_of_subtraction;
    }
    
    public function multiply_two_number()
    {
        $result_of_multiplication = $this->first_no*$this->second_no;
        return $result_of_multiplication;
    }
    
    public function divide_two_number()
    {
        $result_of_dividation = $this->first_no/$this->second_no;
        return $result_of_dividation;
    }
}
