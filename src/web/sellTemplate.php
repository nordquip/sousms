<?php
// include the page that calls the web services
// NOTE: see webServiceCaller.include.php for the behaviors that can be
// called and the data items that can be passed.
// to call new services and pass new data items, edit
// webServiceCaller.include.php as described in the 'NOTE:' sections
// shown there.

// NOTE:
// the post variable "department" must have value either TE (trade engine)
// or UA (user accounts).  This value causes the appropriate web service 
// to be called.

include $_SERVER['DOCUMENT_ROOT'] . '/webServiceCaller.include.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Example page that calls web services</title>
</head>
<body>
<H1>How to call the marketSell service</H1>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
    <input name="department" value="TE">department = TE</input><br />
    <input name="transtype" value="marketSell">behavior = marketSell</input><br />
    <input name="symbol" value="INTC">symbol = INTC</input><br />
    <input name="shares" value="100">number shares = 100</input><br />
    <input type="submit" value="Submit" /><br />
  <br />
  <strong>Return Value:</strong><br />
  <?php echo (isset($resultObj->behavior) ? $resultObj->behavior : ""); ?><br />
  <?php echo (isset($resultObj->success) ? $resultObj->success : ""); ?><br />
  <?php echo (isset($resultObj->statuscode) ?
	  $resultObj->statuscode : ""); ?><br />
  <?php echo (isset($resultObj->statusdesc) ?
	  json_encode($resultObj->statusdesc) : ""); ?><br />
  <br />
  <strong>Debug log:</strong><br />
  <?php echo htmlentities($debuglog); ?>
</form>
</body>
</html>
