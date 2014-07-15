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
    private $account_number;
    private $opening_date;
    private $balance;
    
    
    function __construct($account_number, $opening_date) {
        $this->account_number = $account_number;
        $this->opening_date = $opening_date;
    }
    
    public function getAccount_number() {
        return $this->account_number;
    }

    public function getOpening_date() {
        return $this->opening_date;
    }

    
    public function getBalance() {
        return $this->balance;
    }

    public function setAccount_number($account_number) {
        $this->account_number = $account_number;
    }

    public function setOpening_date($opening_date) {
        $this->opening_date = $opening_date;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }


    public function deposit($amount)
    {
        $this->balance+=$amount;
        return'Deposited';
    }
    
    public function withdraw($amount)
    {
        $this->balance-=$amount;
    }

}
