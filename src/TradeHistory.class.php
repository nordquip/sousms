<?php

/******************************************************************
*      
TradeHistory.class.php
* By: Joe Caudill - November 1, 2012
* 
Description: Get user'strade history

******************************************************************/


class TradeHistory

{
   
   public $numShares, $price, $symbol, $date, $userID;


   
   // constructor
   
   public function __construct($numSh, $p, $sym, $dt, $id) 
   
   {
      
      $this->numShares = $numSh;
      $this->price     = $p;
      $this->symbol    = $symbol;
      $this->date      = $dt;
      $this->userID    = $id;

   }

   

      // connect to database

      $conn = new mysqli('localhost', 'root', '', 'sousms');

      
   if (conn_connect_errno())

         {
	
    die(printf('MySQL Server connection failed: %s', mysqli_connect_error()));

         }

      

};

?>
