<?php

namespace App\Enums;

enum Currency: string
{
    case INR = 'INR'; // Indian Rupee
    case USD = 'USD'; // United States Dollar

    public function getSymbol(): string
    {
        // Define a method to return the symbol for each currency.
        // This could be hardcoded for simplicity, or you could use the Laravel Countries and Currencies package to fetch it dynamically.
        return match ($this) {
            self::INR => '₹',
            self::USD => '$',
            // Add other currencies and their symbols here
        };
    }
}
