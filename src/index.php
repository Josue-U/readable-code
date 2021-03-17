<?php


function orderPizza($pizzaType, $client)
{

    $type = $pizzaType;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzaType;
    $price= calculePrice($type);

    $address = 'unknown';
    if ($client == 'koen') {
        $address = 'a peniche in Liège';
    } elseif ($client == 'nico') {
        $address = 'somewhere in Belgium';
    } elseif ($client == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' pizza should be sent to ' . $client . ". <br>The address: {$address}.";
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $price. '.<br>';




    echo "Order finished.<br><br>";
}

function total_price($price)
{
    return $price;
}

function test($priceType)
{
    echo "Test: type is {$priceType}. <br>";
}

function calculePrice($priceType)
{
    $costType = 'unknown';

    if ($priceType == 'marguerita') {
        $costType = 5;
    } else {
        if ($priceType == 'golden') {
            $costType = 100;
        }

        if ($priceType == 'calzone') {
            $costType = 10;
        }

        if ($priceType == 'hawai') {
            throw new Exception('Computer says hell no');
        }
    }

    return $costType;
}

function billPizza()
{
    $bill = 0;
    orderPizza('calzone', 'nico');
    orderPizza('marguerita', 'nick');

    orderPizza('golden', 'students');
}

function delivery($send)
{
    if ($send) {
        billPizza();
    }
}

delivery(true);
