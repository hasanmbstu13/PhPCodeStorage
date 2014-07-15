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
        <form action="index.php" method="get">
            Radius of Circle:<input type="text" name="radiusText">
            <input type="submit" name="submitButton" value="area">
        </form>
        <?php
        require 'circle.php';
        if(isset($_GET['submitButton']))
            {
                $area_of_a_circle = new Circle();
                
                $area_of_a_circle->radius = $_GET['radiusText'];
                echo 'The area of a circle:'.$area_of_a_circle->get_area();
            }
        
        ?>
    </body>
</html>
