<?php

namespace App;

class BankAccount
{
    public $owner; // владелес счёта
    public $balance; // текущий баланс
    public $accountNumber; // номер счёта
    public $currency; // валюта счёта


    public function __construct($owner, $balance, $accountNumber, $currency){
        $this->owner = $owner;
        $this->balance = $balance;
        $this->accountNumber = $accountNumber;
        $this->currency = $currency;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Депозит новая сумма: $amount\n";
        }
    }

    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Снятие новая сумма: $amount\n";
        }
    }

    public function getBalance()
    {
        echo "Текущий баланс: $this->balance\n";
        return $this->balance;
    }

    public function displayAccountInfo()
    {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
}
     