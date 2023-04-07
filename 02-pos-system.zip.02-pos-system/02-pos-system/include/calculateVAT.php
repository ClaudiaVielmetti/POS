<?php

function calculateVAT($purchasedItemsTotal, $vatRate = 20) {
    // Calculate the VAT amount
    $vatAmount = $purchasedItemsTotal * ($vatRate / 100);
    // Round the VAT amount to 2 decimal places
    $vatAmount = round($vatAmount, 2);
    // Return the VAT amount
    return $vatAmount;
}