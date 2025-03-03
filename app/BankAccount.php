<?php

namespace App;

class BankAccount
{
    public $owner; // владелес счёта
    public $balance; // текущий баланс
    public $accountNumber; // номер счёта
    public $currency; // валюта счёта

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function displayAccountInfo()
    {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
}
     