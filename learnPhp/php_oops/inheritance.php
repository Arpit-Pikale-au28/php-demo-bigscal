<?php

class BankAccount
{
    protected $balance;    // this will allow o access in child class only

    public function __construct($balance)
    {
        $this->balance = $balance;
    }
}

class SavingAccount extends BankAccount {
     
    public function getBalance() {
            echo "Your Account balance is ". $this->balance;    //Here we can assessed the property of base class.
    }

}

$result = new SavingAccount(200);
$result->getBalance();

?>