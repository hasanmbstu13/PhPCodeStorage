<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="displayOutput.php" method="get">
            <input type="text" name="idText"><br />
            <input type="text" name="nameText"><br />
            <input type="text" name="salaryText"><br />
            <input type="submit" name="submitButton">
        </form>
        <?php
            //$id = '007';
            //$name = 'James bond';
            //$salary = '10000';
            //echo $id.' ',$name.' ',$salary;
            
            require 'officeEmployee.php';
        
            if(isset($_GET['submitButton']))
            {
                $an_employee = new officeEmployee();
                
                $an_employee->id = $_GET['idText'];
                $an_employee->name = $_GET['nameText'];
                $an_employee->salary= $_GET['salaryText'];
                
                $salary_with_bonus=$an_employee->get_salary_with_bonus();
                //$id = $_GET['idText'];
                //$name = $_GET['nameText'];
                //$salary = $_GET['salaryText'];
             echo $an_employee->id.' '.$an_employee->name.' '.$an_employee->salary.' '.'Salary with bonus'.$salary_with_bonus;
            }
        ?>
    </body>
    
</html>