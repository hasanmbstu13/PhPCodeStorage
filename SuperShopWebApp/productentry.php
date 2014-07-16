<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method ="POST">
            Product Id : <input type ="text" name ="productIdText"><br/>
            Quantity : <input type ="text" name ="quantityText"><br/>
            <input type="submit" value ="Add/Update" name='addUpdateButton'>
        </form>
        <?php
         {
             require_once 'product.php';
             require_once 'shop.php';
             session_start();
             if(isset($_POST['addUpdateButton']))
             {
                 $product = new Product($_POST['productIdText'], $_POST['quantityText']);
                 /* @var $shop Department */
                 $shop = $_SESSION['shop'];
                 echo $shop->add_product($product);
                 $_SESSION['shop']= $shop;
             }
         }
        ?>
    </body>
</html>
