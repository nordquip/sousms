<?php

/******************************************************************
*      
TotalValue.class.php
* By: Justin Bezuhly - November 10, 2012
* 
Description: Get user's total value of stocks owned

******************************************************************/


class TotalValue

{
   
   public $numShares, $price, $symbol, $userID;


   
   // constructor
   
   public function __construct($numSh, $p, $sym, $id) 
   
   {
      
      $this->numShares = $numSh;
      $this->price     = $p;
      $this->symbol    = $symbol;
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
