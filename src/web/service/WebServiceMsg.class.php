<?php
/*
	Defines data returned from a web service call.
	Exactly the same as Jeff's TradeEngineMessage class.
	Extracted here so the UA service can return the same kinds of 
	messages as the TE does.
	Pete Nordquist  121116
*/

class WebServiceMsg {
	public $behavior, $success, $statuscode, $statusdesc, $retval;
};
?>
