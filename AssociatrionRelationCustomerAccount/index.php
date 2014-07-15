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
        require 'account.php';
        require 'customer.php';
        
        $account = new Account('111-2356','12-25-14');
        $account->deposit(5000);
        $account->withdraw(1000);
        
        $customer= new Customer();
        $customer->setCustomer_account($account);
        echo $customer->getCustomer_account()->getBalance();
        
        
        ?>
    </body>
</html>
