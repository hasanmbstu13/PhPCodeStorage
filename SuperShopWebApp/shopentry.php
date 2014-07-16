<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method ="POST">
            Shop Code : <input type ="text" name ="codeText"><br/>
            Shop Name : <input type ="text" name ="nameText"><br/>
            <input type="submit" value ="Create" name = "create">
        </form>
        <?php
        {
            require 'shop.php';
            session_start();
            if (isset($_POST['create']))
            {
                $shop = new Shop($_POST['codeText'], $_POST['nameText']);
                $_SESSION['shop'] = $shop;
                echo 'shop created';
            }
        }
        ?>
    </body>
</html>
