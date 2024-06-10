<?php
// parent class
class Account{
              // properties
              private $account_no="122333333-";
              private $account_name="Leslie Luvutse";

              // methods
              public function getAccountDetails(){
                            echo $this->account_no ."".$this->account_name;
              }
}