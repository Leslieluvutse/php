<?php

// global variables
$init =null;
function compute_balance(){
     // local variables
     $deposit = 2000;
     $withdrawal = 500;
     $balance = $deposit - $withdrawal;
     echo $balance;
}
compute_balance();