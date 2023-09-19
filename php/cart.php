<?php 

    if(isset($_POS['add_to_cart']))
    {
        if(isset($_SESSION['shopping_cart']))
        {
            $item_array_id = array_column($_SESSION['shopping_cart'], "item_id");

            if(!in_array($_GET['id'], $item_array_id))
            {
                $count = count($_SESSION['shopping_cart']);
                $item_array = array(
                    "item_id"        => $_GET['id'],
                    "item_name"      => $_POS['name_hidden'],
                    "item_preco"     => $_POS['preco_hidden'],
                    "item_capa"      => $_POS['capa_hidden'],
                    "item_quantity"  => $_POS['quantity']
                );
                $_SESSION['shopping_cart'][$count] = $item_array;
                
            }
            else
            {
                echo "Item já adicionado";
                echo "window.location.href='../index.php'";
            }
        }
        else
        {
            $item_array = array(
                "item_id"        => $_GET['id'],
                "item_name"      => $_POS['name_hidden'],
                "item_preco"     => $_POS['preco_hidden'],
                "item_capa"      => $_POS['capa_hidden'],
                "item_quantity"  => $_POS['quantity']
            );

            $_SESSION['shopping_cart'][0] = $item_array;
            echo "window.location.href='../index.php'";
        }
    }

?>