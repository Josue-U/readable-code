<?php

declare(strict_types=1);

function orderPizza($orderType, $client)
{

    echo 'Creating new order... <br>';

    $price= calculePrice($orderType);

    $address = 'Unknown';

    if ($client == 'koen') {

        $address = 'a peniche in Liège';

    } elseif ($client == 'nico') {

        $address = 'somewhere in Belgium';

    } elseif ($client == 'students') {

        $address = 'BeCode office';
    }

    $toPrint = 
    
    'A '. $orderType .' pizza should be sent to ' . $client . 
    '<br>'.'The address: '. $address . '<br>'.'The bill is '. $price . '€'. 
    '<br>' . 'Order finished <br><br>';

    echo $toPrint;
    
}


function calculePrice($pizzaType)
{
    $priceType = '';

    if ($pizzaType == 'margherita') {

        $priceType = 5;

    } elseif ($pizzaType == 'golden') {

        $priceType = 100;
    }

    elseif ($pizzaType == 'calzone') {

        $priceType = 10;
    }

    elseif ($pizzaType == 'hawaii') {

        throw new Exception('Computer says hell no');
    }
    

    return $priceType;
}

function printOrder()
{
    
    orderPizza('calzone', 'nico');
    orderPizza('margherita', 'nick');
    orderPizza('golden', 'students');
}

echo printOrder();