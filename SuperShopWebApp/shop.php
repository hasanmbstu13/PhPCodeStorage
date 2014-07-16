<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of shop
 *
 * @author BCC
 */
class Shop {
    private $code;
    private $name;
    private $product_list;
   // private $MAX_NO_OF_PRODUCTS = 2;
    
    function __construct($code, $name) {
        $this->code = $code;
        $this->name = $name;
        $this->product_list = array();
    }
    
    public function add_product($a_product)
    {
        /*if (count($this->product_list) < $this->MAX_NO_OF_PRODUCTS)
        {
            $this->product_list[] = $a_product;
            return 'Student added';
        }
        else
        {
            return 'No entry';
        }
         * *
         */
        /*if ($product->get_product_id) 
        {
        $this->product_list[] = $a_product;
        echo "product added";
        }
 else {*/
        /*if(count($this->product_list)<1)
        {
            $this->product_list[] = $a_product;
            return 'Product added';
        }
        else
        {
         * *
         */
        
        foreach ($this->product_list as $product) 
            {
            if ($a_product->get_product_id()==$product->get_product_id()) 
            {
                //if (count($this->product_list) < 10) 
                //{
                    $this->product_list [] = $a_product;

                    return 'Product Updated';
                //}
            }
            }
            $this->product_list[] = $a_product;
            echo "product added with new qunatity";
                //else 
                //{
                   // $this->product_list[] = $a_product;
                    //return 'Product added';
                //}
            //} 
            //else 
            //{
                //return 'Duplicate Student';
            //}
            //}
 }
    //}
        
        
        
        
            
    //}
    
    public function get_code() {
        return $this->code;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_no_of_products() {
        return count($this->product_list);
    }
    
    public function get_all_products()
    {
        return $this->product_list;
    }


    
}
