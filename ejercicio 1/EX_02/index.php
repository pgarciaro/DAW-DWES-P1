<?php

$shopping_cart = 42.21;
$tipo = "cables";
$shipping_price = 0;

if ($shopping_cart<20 && $tipo == 'cables'){
    echo "No se puede enviar";
}

if ($shopping_cart<20 && $tipo == 'perifericos'){
    $shipping_price = 4.99;
    echo "Los gastos de envio son $shipping_price";
}

if ($shopping_cart>19 && $shopping_cart<51){
    $shipping_price = 4.99;
    echo "Los gastos de envio son $shipping_price";
}
if ($shopping_cart>50){
    $shipping_price = 0;
    echo "el envio es $shipping_price";
}
if ($shopping_cart> 150){
    $shipping_price = 0;
    echo "$shipping_price. Para el siguiente pedido tienes un codigo de descuento, GIMBERNAT_20_%";
}