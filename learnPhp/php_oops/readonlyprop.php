<?php
class BankAccount
{
    public readonly int $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }
}


$account = new BankAccount(100);
$account->balance = 100;       // this will issue an error beacuse we cannnot modify readonly property.
var_dump($account->balance);
