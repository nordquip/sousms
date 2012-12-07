<?php
/******************************************************************
* test.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-11-05
* Description: Trade engine testing
*/

include $_SERVER['DOCUMENT_ROOT'] . '/webServiceCaller.include.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trade</title>
<style type="text/css">
#content {
	width: 600px;
	margin: 0 auto;
	text-align: center;
}
#content fieldset {
	width: 350px;
	display: block;
	margin: 0 auto;
	text-align: left;
}
#content fieldset legend, #content fieldset dt {
	font-weight: bold;
}
#content fieldset dl {
	margin: 0;
}
#content fieldset dt {
	float: left;
	text-align: right;
	margin-right: 10px;
	width: 9em;
}
#content fieldset dd {
	clear: right;
}
#content #limit.hide, #content #order.hide {
	display: none;
}
#content #debug {
	width: 100%;
	height: 300px;
}
#content .c {
	text-align: center;
}
</style>
<script type="text/javascript">
var checkTransType = function (element) {
	var behavior = element.options[element.selectedIndex].value;
	document.getElementById("limit").className = (behavior.indexOf("limit") !== -1 ? "" : "hide");
	document.getElementById("order").className = (behavior.indexOf("cancel") !== -1 ? "" : "hide");
};
window.onload = function () {
	if (document.forms[0] && document.forms[0].transtype) {
		checkTransType(document.forms[0].transtype);
	}
};
</script>
</head>
<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
<div id="content">
  <fieldset>
  <legend>Stock Market Transaction Tester</legend>
  <dl>
    <dt><label for="f0">Department</label></dt>
    <dd><select name="department" id="f0">
		<option value="TE" selected>TE</option>
		<option value="UA">UA</option>
		</select>
	</dd>
    <dt><label for="f1">Transaction Type</label></dt>
    <dd><select name="transtype" id="f1" onchange="checkTransType(this);"><?php
	foreach ($behaviors as $key => $val) {
		$sel = ($key == $transtype ? " selected=\"selected\"" : "");
		echo "<option value=\"$key\"$sel>$val</option>"; 
	}
	?></select>
    </dd>
    <dt><label for="f2">Symbol</label></dt>
    <dd><input type="text" name="symbol" id="f2" size="20" title="Example: INTC" value="<?php echo htmlentities($symbol); ?>" /></dd>
    <dt><label for="f3">Number of Shares</label></dt>
    <dd><input type="text" name="shares" id="f3" size="8" title="Example: ######" value="<?php echo htmlentities($shares); ?>" /></dd>
  </dl>
  <dl id="limit" class="hide">
    <dt><label for="f4">Limit Price</label></dt>
    <dd><input type="text" id="f4" name="limitprice" size="8" title="Example: $###,###.##" value="<?php echo htmlentities($limitprice); ?>" /></dd>
  </dl>
  <dl id="order" class="hide">
    <dt><label for="f5">Order ID</label></dt>
    <dd><input type="text" id="f5" name="orderid" size="8" title="Example: ####" value="<?php echo htmlentities($orderid); ?>" /></dd>
  </dl>
  <div class="c"><input type="submit" value="Submit Transaction" /></div>
  </fieldset>
  <strong>Debug Log</strong><br />
  <textarea id="debug" wrap="off"><?php echo htmlentities($debuglog); ?></textarea>
</div>
</form>
</body>
</html>


