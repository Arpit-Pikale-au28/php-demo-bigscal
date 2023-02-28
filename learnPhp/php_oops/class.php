<?php
class BankAccount
{
    private $accountNumber;
    private $balance;

    function __construct($name, $accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->$name = $name;
        $this->balance = $balance;
    }
    public function CheckBalance() {
        echo "Your Balance for Account No ". $this->accountNumber. " is Rs ". $this->balance ."\n";
    }

    public function withdraw($amount)
    {
        $this->balance -= $amount;
        echo  "Amount Withdrawn successfully Rs. ". $amount . " Your New Balance is Rs. ". $this->balance ."\n";
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
        echo  "Amount deposited successfully Rs. " . $amount . " Your New Balance is Rs. " . $this->balance . "\n";
    }

    function __destruct()
    {
        echo "Trancation Completed Successfully \n";
    }
}

$customer = new BankAccount("Arpit", 2503594134, 1400);
$customer->deposit(500);
//$customer->CheckBalance();

$customer->withdraw(1200);