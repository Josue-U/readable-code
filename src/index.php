<?php

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

    $toPrint =  'A '.$orderType .' pizza should be sent to ' . $client . ". <br>The address: {$address}" 
    .'<br>'.'The bill is '. $price. '€'.  '.<br>'.'Order finished <br><br>';

    echo $toPrint;
    
}


function calculePrice($pizzaType)
{
    $priceType = '';

    if ($pizzaType == 'marguerita') {

        $priceType = 5;

    } elseif ($pizzaType == 'golden') {

        $priceType = 100;
    }

    elseif ($pizzaType == 'calzone') {

        $priceType = 10;
    }

    elseif ($pizzaType == 'hawai') {

        throw new Exception('Computer says hell no');
    }
    

    return $priceType;
}

function billPizza()
{
    
    orderPizza('calzone', 'nico');
    orderPizza('marguerita', 'nick');
    orderPizza('golden', 'students');
}

echo billPizza();