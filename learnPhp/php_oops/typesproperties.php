<?php

class BankAccount
{
    public float $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }
}


$account = new BankAccount("200");  // this will convert string into float
var_dump($account->balance);


//If you don’t want this behavior, you can disable it by declaring strict_types at the beginning of the file as follows:
