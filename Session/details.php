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
        <?php
        session_start();
        $person = $_SESSION['a_person'];
        echo $person->get_full_name();
        echo $person->get_reverse_name();
         //echo 'I am inside details page';
        ?>
    </body>
</html>
