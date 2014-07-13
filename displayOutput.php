<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="displayOutput.php" method="post">
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
            if(isset($_POST['submitButton']))
            {
                $id = $_POST['idText'];
                $name = $_POST['nameText'];
                $salary = $_POST['salaryText'];
             echo $id.' '.$name.' '.$salary;
            }
        ?>
    </body>
    
</html>