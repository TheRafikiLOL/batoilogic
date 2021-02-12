<?php

function showPriceEuro($price){
    $decimalPrice = number_format($price, 2);
    $decimalPrice = explode('.', $decimalPrice);
	return $decimalPrice[0];
}

function showPriceCentimo($price){
    $decimalPrice = number_format($price, 2);
    $decimalPrice = explode('.', $decimalPrice);
    return $decimalPrice[1];
}
