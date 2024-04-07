<?php

namespace App\Models;

class Transactions 
{
   private static $transactions = [
    [
        "transaction_id" => 7,
        "transaction_name" => "Pemasukan",
        "transaction_date" => "2024-03-01",
        "category_id" => "P002",
        "transaction_amount" => 30,
        "transaction_price" => 100000,
        "category_name" => "Pembayaran Modul-modul",
        "category_type" => "income"
    ],
    [
        "transaction_id" => 8,
        "transaction_name" => "Pemasukan",
        "transaction_date" => "2024-03-02",
        "category_id" => "P001",
        "transaction_amount" => 20,
        "transaction_price" => 200000,
        "category_name" => "Pembayaran Peserta Didik",
        "category_type" => "income"
    ],
    
];

    public static function all(){
        return self::$transactions;
    }
}
