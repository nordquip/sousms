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
   public $userName,$numShares,$symbol;
};
function GetTradeHistory
{
   $token = $POST['token'];
   $userID = mysql_query("call getUserID(token)");
   //don't know the methods yet
};
   echo 'trade history php called';
?>
</body>
</html>