<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Circle
 *
 * @author LAB5PC18
 */
class Circle {
    public $radius;
    //const PI = 3.1416;
    
    public function get_area()
    {
        $area_of_a_circle = ($this->radius*$this->radius)*3.1416;
        return $area_of_a_circle;
    }
}
