<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Account
 *
 * @author LAB5PC18
 */
class Account {
    private $name;
    private $account_no;
    private $balance;
            
    function __construct($name, $account_no) {
        $this->name = $name;
        $this->account_no = $account_no;
    }
    
    public function get_name() {
        
        return $this->name;
    }
    
    public function get_number()
    {
        return $this->account_no;
    }
    public function deposit($amount)
    {
        $this->balance = $this->balance + $amount;
    
    }
    
    public function withdraw($amount)
    {
        $this->balance = $this->balance-$amount;
    }

}
