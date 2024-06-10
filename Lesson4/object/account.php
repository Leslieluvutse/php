<?php

class Account{
              // properties
              private $account_no ="2765567787-";
              private $account_name="Leslie Luvutse";

              // methods

              public function getAccountDetails(){
                            echo $this->account_no ."".$this->account_name;
              }
}

// creating an object
$account = new Account();

$account ->getAccountDetails();