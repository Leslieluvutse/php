<?php

class Account{
              // properties
              private $account_no;
              private $account_name;

              // methods
              public function getAccountNo(){
                            echo $this->account_no ."".$this->account_name;
              }
}