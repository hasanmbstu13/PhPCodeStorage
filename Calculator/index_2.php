<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="get">
            <input type="text" name="firstNoText"><br />
            <input type="text" name="secondNoText"><br />
            <input type="submit" name="addSubmitButton" value="add">
            <input type="submit" name="subtractSubmitButton" value="subtract">
            <input type="submit" name="multiplySubmitButton" value="multiply">
            <input type="submit" name="divideSubmitButton" value="divide">
        </form>
        <?php
           
            require 'calculator.php';
        
            if(isset($_GET['addSubmitButton']))
            {
                $an_addition = new Calculator();
                $an_addition->first_no = $_GET['firstNoText'];
                $an_addition->second_no = $_GET['secondNoText'];
                echo 'The addition of two number is:'.$an_addition->add_two_number();
            }
            if(isset($_GET['subtractSubmitButton']))
            {
                $subtraction = new Calculator();
                $subtraction->first_no = $_GET['firstNoText'];
                $subtraction->second_no = $_GET['secondNoText'];
                echo 'The addition of two number is:'.$subtraction->subtract_two_number();
            }
            
            if(isset($_GET['multiplySubmitButton']))
            {
                $multiply = new Calculator();
                $multiply->first_no = $_GET['firstNoText'];
                $multiply->second_no = $_GET['secondNoText'];
                echo 'The addition of two number is:'.$subtraction->multiply_two_number();
            }
            
            if(isset($_GET['divideSubmitButton']))
            {
                $divide = new Calculator();
                $divide->first_no = $_GET['firstNoText'];
                $divide->second_no = $_GET['secondNoText'];
                echo 'The addition of two number is:'.$divide->divide_two_number();
            }
        ?>
    </body>
    
</html>