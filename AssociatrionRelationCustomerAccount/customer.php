<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author LAB5PC18
 */
class Customer {
    private $customer_name;
    private $email_address;
    private $customer_account;
    public function getCustomer_name() {
        return $this->customer_name;
    }

    public function getEmail_address() {
        return $this->email_address;
    }
    
    /**
     * 
     * @return Account
     */
    

    public function getCustomer_account() {
        return $this->customer_account;
    }

    public function setCustomer_name($customer_name) {
        $this->customer_name = $customer_name;
    }

    public function setEmail_address($email_address) {
        $this->email_address = $email_address;
    }

    public function setCustomer_account($customer_account) {
        $this->customer_account = $customer_account;
    }

        //put your code here
}
