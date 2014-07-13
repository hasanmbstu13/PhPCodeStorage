<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author LAB5PC18
 */
class officeEmployee {
    public $id;
    public $name;
    public $salary;
    
    public function get_salary_with_bonus()
    {
        if($this->salary<=10000)
            return $this->salary +$this->salary*0.5;
        else if($this->salary>10000 && $this->salary<=30000)
            return $this->salary +$this->salary*0.3;
        else if($this->salary>30000)
            return $this->salary +$this->salary*0.2;
    }
}
