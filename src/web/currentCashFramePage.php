<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta http-equiv="refresh" content="60" /> <!-- content is in seconds-->

<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/webServiceCaller.include.php';
	
	function infoDisplay ()
	{
		echo "Hello, $username. Your current cash amount is $currentcash.";
	}
	
?>

<script type="text/JavaScript">
   window.onload = setupRefresh;

    function setupRefresh() {
      setTimeout("refreshPage();", 60000); // milliseconds
    }
    function refreshPage() {
       window.location = location.href;
    }</script>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>

<?php  infoDisplay();  ?><br />

<!--This Debug Info can be removed once it is proven that it works -->
<strong>Debug/Test Info</strong><br />
  <?php echo (isset($resultObj->behavior) ? $resultObj->behavior : ""); ?><br />
  <?php echo (isset($resultObj->success) ? $resultObj->success : ""); ?><br />
  <?php echo (isset($resultObj->statuscode) ?
	  $resultObj->statuscode : ""); ?><br />
  <?php echo (isset($resultObj->statusdesc) ?
	  json_encode($resultObj->statusdesc) : ""); ?><br />

</body>

</html>
