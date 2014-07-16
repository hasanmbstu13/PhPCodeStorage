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
        <?php
            require_once 'shop.php';
            require_once 'product.php';            
            session_start();
            /* @var $shop Department */
            $shop = $_SESSION['shop'];
            echo $shop->get_code(). '<br/>';
            echo $shop->get_name(). '<br/>';
            //echo $shop->get_no_of_products(). '<br/>';
            echo 'Product Id Quantiry'. '<br/>';
            foreach ($shop->get_all_products() as $a_product) {
                echo $a_product->get_product_id(). ' '. $a_product->get_quantity(). ' '. '<br/>';
            }
                    
        ?>
    </body>
</html>
