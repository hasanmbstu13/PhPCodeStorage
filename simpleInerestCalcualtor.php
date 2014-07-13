<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="simpleInerestCalcualtor.php" method="get">
            Principle Amount:<input type="text" name="principleAmount"><br />
            Annual Interest Rate:<input type="text" name="annualInterestRate">%<br />
            Time Period:<input type="text" name="timePeriod">year<br />
            <input type="submit" value="Calculate" name="calculator">
        </form>
        <?php
            //$id = '007';
            //$name = 'James bond';
            //$salary = '10000';
            //echo $id.' ',$name.' ',$salary;
            
            require 'calculator.php';
        
            if(isset($_GET['calculator']))
            {
                $interestCalculation = new Calculator();
                
                $interestCalculation->principleAmount = $_GET['principleAmount'];
                $interestCalculation->annualInterestRate = $_GET['annualInterestRate'];
                $interestCalculation->timePeriod= $_GET['timePeriod'];
                
                $interestWithPrincipleAmount=$interestCalculation->totalAmountWithInterest();
                //$id = $_GET['idText'];
                //$name = $_GET['nameText'];
                //$salary = $_GET['salaryText'];
             echo "Result is:".$interestWithPrincipleAmount;
            }
        ?>
    </body>
    
</html>