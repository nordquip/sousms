<html>
<head><title>Trade History</title></head>
<body>
<h2>My Trade History</h2>
<?php  
/********************************************
* tradehistory.php
* by Jesse Allred
********************************************/

include("WSRequestManager.class.php");
include("login.include.php");

class TradeHistory
{
   public $numShares,$price,$symbol,$date,$userID;
};
function GetTradeHistory
{
   $history = new TradeHistory(
      $req->history->numShares,               
      $req->history->price,                  
      $req->history->symbol,                
      $req->history->transDate,             
      $req->history->userID,     
	);
   $history->mysql_query("CALL getTradeHistory(userID)")
      or die('Could not locate trade history: ' .mysql_error());
   $token = $POST['token'];
   $userID = mysql_query("call getUserID(token)");
};
   echo 'trade history php called';
?>
</body>
</html>