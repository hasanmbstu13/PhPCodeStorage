<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author BCC
 */
class Product {
    private $product_id;
    private $quantity;
    
    function __construct($product_id, $quantity) {
        $this->product_id = $product_id;
        $this->quantity = $quantity;
    }
    
    public function get_product_id() {
        return $this->product_id;
    }

    public function get_quantity() {
        return $this->quantity;
    }


}
