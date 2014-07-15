<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="SalaryCalculation.php" method="get">
            Employee Name:<input type="text" name="employee_name"><br />
            Basic Amount:<input type="text" name="basic_amount"><br />
            House Rent:<input type="text" name="house_rent">%of Basic<br />
            Medical Allowance:<input type="text" name="medical_allowance">%of Basic<br />
            <input type="submit" value="Show Me Salary" name="show_me_salary">
        </form>
        <?php
            
            require 'EmployeeSalaryCalculation.php';
        
            if(isset($_GET['show_me_salary']))
            {
                $an_employee = new EmployeeSalaryCalculation();
                
                $an_employee->employee_name = $_GET['employee_name'];
                $an_employee->basic_amount = $_GET['basic_amount'];
                $an_employee->house_rent= $_GET['house_rent'];
                $an_employee->medical_allowance= $_GET['medical_allowance'];
                
                $others_with_basic_salary=$an_employee->salary_of_an_employee();
                
                echo $an_employee->employee_name.','."your total salary:",'',$others_with_basic_salary;
            }
        ?>
    </body>
    
</html>
