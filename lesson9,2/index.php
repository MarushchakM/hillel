<?php

    require_once 'BankAccount.php';

    $firstCustomer = new BankAccount(1234123412341234);
    try {
        $firstCustomer->pushMoney(200);
        $firstCustomer->getMoney(150);
     } catch (Exception $e) {
         echo $e->getMessage() . PHP_EOL;
     }