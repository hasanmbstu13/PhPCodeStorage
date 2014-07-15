<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form >
            Customer Name:<input type="text" name="customerNameText"><br />
            Account No:<input type="text" name="accountNoText">
             <input type="submit" name="createButton" value="create"><br/>
            Amount:<input type="text" name="0"><br/>
            <input type="submit" name="depositButton" value="Deposit">
            <input type="submit" name="withdrawButton" value="withdraw"><br/>
            <input type="submit" name="showReportButton" value="Show Report">
        </form>
        <?php
           
            require 'account.php';
            //$calculator = new Calculator();
            
            session_start();
            
            if(isset($_GET['createButton']))
            {
                $account = new Account($_GET['customerNameText'],$_GET['accountNoText']);
                
                $_SESSION['an_account']=$account;
                echo'account created';
                
            }
            if(isset($_GET['depositButton']))
            {
               // echo 'deposited'; 
                $account=$_SESSION['an_account']; //= $account;
                
                //$_SESSION['an_account'];
                $account->deposit($_GET['amountText']);
                $_SESSION['an_account']=$account;
                echo 'deposited';
                
            }
            
            if(isset($_GET['withdrawButton']))
            {
                $account = $_SESSION['an_account'];
                //session_start();
                //$_SESSION['an_account'];
                $account->withdraw($_GET['amountText']);
                $_SESSION['an_account']=$account;
                echo 'Withdrawn';
                
            }
            
            if (isset($_GET['showReportButton']))
            {
                $account = $_SESSION['an_account'];
                echo $account->get_name(). '<br/>';
                echo $account->get_number(). '<br/>';
                echo $account->get_balance(). '<br/>';
            }         
            
            
        ?>
    </body>
    
</html>