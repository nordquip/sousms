<?php

include($_SERVER['DOCUMENT_ROOT'] . "/webServiceCaller.include.php"); //include from root of server



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SOU SMS Mobile Trade Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="js/rhinoslider-1.02.min.js"></script>
<script type="text/javascript" src="js/mousewheel.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			$(document).ready(function() {
				$('#slider').rhinoslider({
					autoPlay: true
				});
			});

	
 type="application/x-javascript"> addEventListener("load", function() { setTimeout(
hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 

var checkTransType = function (element) {
	var behavior = element.options[element.selectedIndex].value;
	document.getElementById("limit").className = (behavior.indexOf("limit") !== -1 ? "" : "hide");
};
window.onload = function () {
	if (document.forms[0] && document.forms[0].transtype) {
		checkTransType(document.forms[0].transtype);
	}
};

var checkSymbolType = function (element) {
	var stocks = element.options[element.selectedIndex].value;
	document.getElementById("AAPL").className = (stocks.indexOf("AAPL") !== -1 ? "" : "hide");
};
window.onload = function () {
	if (document.forms[0] && document.forms[0].symbol) {
		checkTransType(document.forms[0].symbol);
	}
};var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>

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
#content #limit.hide {
	display: none;
}
#content #debug {
	width: 100%;
	height: 300px;
}
#content .c {
	text-align: center;
}
/* reset */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, Q s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;a
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
/* Additions */
a{text-decoration:none;}
.txt-rt{text-align:right;}
.txt-lt{text-align:left;}
.txt-center{text-align:center;}
.float-rt{float:right;}
.float-lt{float:left;}
.clear{clear:both;}
.pos-relative{position:relative;}
.pos-absolute{position:absolute;}
.display-block{display:block;}
/*--------reset--------*/
body{
	background:#2c251f;
	font-family:Verdana, Arial, Helvetica, sans-serif;
}
.header{
	margin:0 0 35px 0;
}
.wrap{
	width:100%;
	margin:0 auto;
	background:#2c251f;
}
.logo{
	text-align:center;
	margin:20px 0;
}
.logo a{
	font-size:24px;
	color: #D9C8BE;
	text-transform: uppercase;
}
/*--nav--*/
.nav{
	margin-top:10px;
	background:#40332a;
	-webkit-border-radius:.3em;
       -moz-border-radius:.3em;
	        border-radius:.3em;
}
.nav ul{
	padding-left:6px;
}
.nav li{
	float:left;
	text-align:center;
	display:inline-block;
	border-right:1px solid #564437;
}
.nav li a{
	color:#d9c8be;
	font-size:12px;
	display:block;
	padding:8px 7px;
}
.nav li a:hover{
	color:#fff;
	background:#564437;
}
.content{
	margin:0 auto;
}
.slide-box{
	margin:10px auto 30px auto;
	width:300px;
	height:100px;
}
/*--list--*/
.list li{
	margin:0;
	color:#c4ac9e;
	line-height:1.3em;
	font-size:12px;
	padding-bottom:10px;
	margin-left:8px;
	list-style-type: circle;
}
/*--boxes--*/
.box:first-child{
	margin-left:0;
}
.box{
	float:left;
	position:relative;
	width:300px;
	height:320px;
	background:#40332a;
	margin:0 0 0 44px;
	-webkit-box-shadow:1px 2px 3px #000;
	   -moz-box-shadow:1px 2px 3px #111;
	        box-shadow:1px 2px 3px #1d1d1d;
	-webkit-border-radius:.3em;
       -moz-border-radius:.3em;
	        border-radius:.3em;
}
.box h1{
	margin:0 0 12px 0;
	padding-bottom:12px;
	font-size:18px;
	color:#d9c8be;
	border-bottom:2px dotted #d9c8be;
}
.box .prev{
	margin:18px auto;
	text-align:center;
}
.box .more p{
	position:absolute;
	right:15px;
	bottom:15px;
	background:#2c251f;
	font-size:10px;
	padding:5px;
	-webkit-border-radius:.3em;
       -moz-border-radius:.3em;
	        border-radius:.3em;
}
.box .more p a{
	color:#9dc41d;
	display:block;
}
.boxes{
	margin:35px auto;
}
.b-box{
	width:100%;
	padding-bottom:20px;
	background:#40332a;
	-webkit-box-shadow:1px 2px 3px #000;
	   -moz-box-shadow:1px 2px 3px #111;
	        box-shadow:1px 2px 3px #1d1d1d;
	-webkit-border-radius:.3em;
       -moz-border-radius:.3em;
	        border-radius:.3em;
}
.b-box img{
	text-align:center;
	max-width:100%;
}
.b-box h1{
	margin:15px;
	padding:10px 0;
	font-size:16px;
	color:#d9c8be;
	border-bottom:2px dotted #d9c8be;
}
.b-box p,
.b-box a{
	margin:0 auto;
	line-height:1.5em;
	padding:10px;
	font-size:12px;
	color:#C4AC9E;
}
/*Table*/
.table{
	display:table;
	font-size:12px;
	border-bottom:1px solid #564437;
	color:#c3aea2;
	margin:3em auto;
}
.table-head{
	 display: table-header-group;
}
.table-head .column{
	background:#564437;
	color:#c3aea2;
	border-right:1px solid #564437;
	border-bottom:none;
	text-align:center;
}
.row{
	display:table-row;
}
.row .column:nth-child(1){
	border-left:1px solid #564437;
}
.row:last-child .column{
	border-bottom:none;
}
.column{
	display:table-cell;
	padding:10px 20px;
	border-bottom:1px solid #564437;
	border-right:1px solid #564437;
}
/*--footer--*/
.f-menu{
	margin:1.8em 0;
	background:#40332a;
	-webkit-border-radius:.3em;
       -moz-border-radius:.3em;
	        border-radius:.3em;
}
.f-menu ul{
	padding:0;
	text-align:center;
}
.f-menu li{
	display:inline-block;
}
.f-menu li a{
	color:#a68775;
	font-size:11px;
	display:block;
	padding:10px;
}
.f-menu li a:hover{
	color:#fff;
}
.copy{
	color:#a68775;
	font-size:10px;
	text-align:center;
	line-height:1.4em;
	padding-bottom:10px;
}
/*--contact--*/
.contact{
	margin:1em 0 1em 0;
}
.contact li:first-child{
	font-size:16px;
	color:#9DC41D;
}
.contact li:last-child{
	line-height:1.5em;
	border-top:1px solid #2c251f;
	padding-top:10px;
}
.contact li{
	color:#c4ac9e;
	font-size:12px;
	padding-bottom:9px;
}
.land{
	font-size:12px;
	color:#c4ac9e;
}
.book-list{
	margin:1em 0;
}
.book-list li{
	padding:7px 0;
	font-size:14px;
	color:#C4AC9E;
	
}
.book-list li:first-child{
	color:#9DC41D;
	font-size:18px;
	
}
 /*
  * Rhinoslider 1.02
  * http://rhinoslider.com/
  *
  * Copyright 2012: Sebastian Pontow, Ren? Maas (http://renemaas.de/)
  * Dual licensed under the MIT or GPL Version 2 licenses.
  * http://rhinoslider.com/license/
  */
.rhino-btn {
	background:url(../images/rhinoslider-sprite.png) 0 0 no-repeat;
	z-index:10;
	width:20px;
	height:20px;
	display:block;
	text-indent:-999%;
}

.rhino-prev, .rhino-next { bottom:-4px; }

.rhino-prev {
	left:-6px;
	background-position:-168px 0;
}

.rhino-next {
	right:-6px;
	background-position:-106px 0;
}

.rhino-prev:hover { background-position:-20px -53px; }

.rhino-next:hover { background-position:-106px -53px; }

.rhino-toggle {
	top:-4px;
	left:-6px;
}

.rhino-play { background-position:0 0; }

.rhino-play:hover { background-position:0 -53px; }

.rhino-pause { background-position:-22px 0; }

.rhino-pause:hover { background-position:-56px -53px; }

.rhino-container { position:relative; }

.rhino-caption {
	position:absolute;
	background: #000;
	display:none;
	left:0;
	right:0;
	top:0;
	color:#fff;
	padding:10px;
	text-align:right;
}

.rhino-bullets {
	position: absolute;
	bottom: -3px;
	left: 50%;
	margin:0 0 0 -50px;
	z-index: 10;
	background: #fff;
	padding:0;
}
.rhino-bullets:before, .rhino-bullets:after {
	position:absolute;
	display:block;
	left:-16px;
	content:' ';
	width:16px;
	height:26px;
}
.rhino-bullets li {
	float:left;
	display:inline;
	margin:0 2px;
}
.rhino-bullets li a.rhino-bullet {
	display: block;
	width: 16px;
	height: 10px;
	cursor: pointer;
	background: white;
	font-size: 10px;
	text-align: center;
	padding: 0 0 10px 0;
	color: #333;
	text-decoration:none;
	-webkit-user-select:none;
	-moz-user-select:none;
	user-select:none;
}

.rhino-bullets li a.rhino-bullet:hover, .rhino-bullets li a.rhino-bullet:focus {
	color:#999;
	background:#eee;
}

.rhino-bullets li a.rhino-bullet.rhino-active-bullet {
	color:#fff;
	background:#40332A;
}

.demo-header{
	background:#fff;
	border-bottom:1px solid #ddd;
	font-size:12px;
	-moz-box-shadow:2px 0 10px #ddd;
	-webkit-box-shadow:2px 0 10px #ddd;
	box-shadow:2px 0 10px #ddd;
}
.demo-header a{
	color:#2d2d2d;
	text-decoration:none;
	padding:10px;
	display:inline-block;
}
.demo-header a:hover{
	color:#ff4800;
}
#slider {
	width:310px;
	height:100px;
	
	/*IE bugfix*/
	padding:0;
	margin:0;
}

#slider li { list-style:none; }
#page{
	margin:40px auto;
	width:990px;
}
/* content */
.content ul{
	margin:0 0 12px 0;
	padding-left:12px;
}
.content li{
	color:#C4AC9E;
	font-size:12px;
	line-height:22px;
}
.content a{
	color:#88aa00;
}
.content h2,
.content h3{
	color:#D9C8BE;
	font-size:12px;
	font-weight:bold;
	margin:10px;
}
/* form */
.form{
	font-size:.8em;
	margin:1em 0 0 1em;
}
form label{
	font-size:15px;
	color:#d9c8be;
	padding-bottom:5px;
}
form div{
	padding:10px;
}
form div:last-child{
	border-bottom:none;
}
form span{
	display:block;
	color:#aaa;
}
.form form input[type=text],
form input[type=password],
form textarea,
form input[type=text].error,
form input[type=password].error,
form select.error{
	padding:8px 5px;
	width:90%;
	font-size:14px;
	font-family:Arial, Helvetica, sans-serif;
	margin:10px 0;
	border:1px solid #564437;
	color:#d9c8be;
	background:none;
-webkit-border-radius:.2em;
   -moz-border-radius:.2em;
		border-radius:.2em;
}
.form form input[type=text]:focus,
form input[type=password]:focus,
form textarea:focus,
form select:focus{
	background:none;
	outline:none;
}
.content form input[type=submit]{
	cursor:pointer;
	color:#8A0;
	background:#2c251f;
	padding:8px 15px;
	border:1px solid #564437;
-webkit-border-radius:.3em;
   -moz-border-radius:.3em;
		border-radius:.3em;
}
.content form input[type=submit]:hover{
	background:#564437;
}
.content form textarea{
	height:100px;
	width:90%;
}
.error{
display:inline;
	font-size:12px;
	font-weight:normal;
	padding:10px 0 0 10px;
	color:#FF0000;
}
select.error{
	padding:0;
}
</style>


</head>
<body>
    <div class="header">
        <div class="wrap">
            <div class="logo"><a href="index.html">Trade Page</a></div>
            <div class="nav">
                
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="wrap">
    <div class="content">
            <div class="slide-box">
                <ul id="slider">
                    <li><img src="http://lorempixel.com/300/100/" /></li>
                    
                </ul>
            </div>
            <div class="b-box">
            <h1>Trade Request</h1>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
			
			<dl>
			<dt><label for="f1">Stock Option</label></dt>
			<dd><select name="symbol" id="f1" onchange="checkSymbolType(this);"><?php
			foreach ($stocks as $key => $val) {
				$sel = ($key == $symbol ? " selected=\"selected\"" : "");
				echo "<option value=\"$key\"$sel>$val</option>"; 
			}
			?></select>
			</dd>
			
			 <dt><label for="f2">Transaction Type</label></dt>
			<dd><select name="transtype" id="f2" onchange="checkTransType(this);"><?php
			foreach ($behaviors as $key => $val) {
			$sel = ($key == $transtype ? " selected=\"selected\"" : "");
			echo "<option value=\"$key\"$sel>$val</option>"; 
			}
			?></select>
		
			 
			<!--- <input type="radio" name="transtype" value="marketBuy" />Buy 
			<input type="radio" name="transtype" value="marketSell" />Sell<br /> -->
			
			Quantity: <input type="text" name="shares" value="" />
			
			
			<input type="hidden" name="department" value="TE" />

			<datalist name="symbol" id="f1" onchange="checkSymbolType(this);">
				<option value="AAPL">AAPL - Apple - NASDAQ</option>
				
				<option value="ADBE">ADBE  -  Adobe Systems Incorporated  -  NASDAQ</option>
				
				<option value="ADSK">ADSK  -  Autodesk, Inc.  -  NASDAQ</option>
				
				<option value="ALU ">  -  Alcatel / Lucent  -  NYSE</option>
				
				<option value=" AMZN "> -  Amazon  -  NASDAQ  </option>
				
				<option value=" ATVI ">  -  Activision Blizzard  -  NASDAQ </option>
				
				<option value=" AXP ">  -  American Express  -  NYSE</option>
				
				<option value=" CAKE"> - The Cheesecake Factory INC  -  NASDAQ  </option>
				
				<option value=" CMCSA">  -  Comcast  -  NASDAQ  </option>
				
				<option value=" COKE "> -  Coca-Cola  -  NASDAQ  </option>
				
				<option value=" CSCO">   -  Cisco  -  NASDAQ </option>
				
				<option value=" DIS ">  -  Disney  -  NYSE</option>
				
				<option value="DNKN ">  -  Dunkin Donuts  -  NASDAQ </option>
				
				<option value="EBAY ">  -  Ebay  -  NASDAQ </option>
				
				<option value=" ERTS ">- Electronic Arts - NASDAQ  </option>
				
				<option value=" GE ">  -  General Electric  -  NYSE</option>
				
				<option value="GOOG">   -  Google  -  NASDAQ </option>
				
				<option value=" GRMN "> -  Garmin  -  NASDAQ  </option> 
				
				<option value=" HAS "> -  Hasbro  -  NASDAQ  </option>
				
				<option value=" HSY">  - Hershey  -  NYSE</option>
				
				<option value=" HOTT"> - Hot Topic  -  NASDAQ  </option>
				
				<option value="INTC ">  -  Intel Corporation  -  NASDAQ </option>
				
				<option value="JBLU "> - Jetblue Airways Corp.  -  NASDAQ</option>
				
				<option value="MON ">  -  Monsanto  -  NYSE,</option>
				
				<option value=" MSFT "> -  Microsoft  -  NASDAQ  </option>
				
				<option value=" NFLX "> -  Netflix  -  NASDAQ  </option>
				
				<option value=" NVDA ">- NVIDIA Corporation  -  NASDAQ  </option>
				
				<option value=" ORCL ">  -  Oracle  -  NASDAQ </option>
				
				<option value=" PBG  ">  -  Petrobank Energy and Resources  -  TSE</option>
				
				<option value=" QCOM ">  -  Qualcomm  -  NASDAQ </option>
				
				<option value=" RCL ">  -  Royal Caribbean Cruises  -  NYSE</option>
				
				<option value="SBUX  "> -  Starbucks  -  NASDAQ </option>
				
				<option value="SIRI  ">  -  Sirius Satellite  -  NASDAQ</option>
				
				<option value="SNE 	">  -  Sony Corporation  -  NASDAQ</option>
				
				<option value=" SPLS ">  -  Staples  -  NASDAQ </option>
				
				<option value=" TTWO  ">- Take-Two Interactive Software, Inc.  -  NASDAQ </option>
				
				<option value=" TXN  "> -  Texas Instruments  -  NASDAQ </option>
				
				<option value=" V "> -  Visa  -  NYSE </option>
				
				<option value=" VOD "> -  Vodafone  -  NASDAQ </option>
				
				<option value=" YHOO ">   -  Yahoo -  NASDAQ</option>
				 
				<option value=" ZNGA "> -  Zynga Inc.  -  NASDAQ</option>
			</datalist>
			
		
		
			<input type="submit" value="Submit">
			
			
			<br/>
			<input type="submit" value="Submit">
			<strong>Return Value:</strong><br />
			<?php echo (isset($resultObj->stocks) ? $resultObj->stocks : ""); ?><br />
			<?php echo (isset($resultObj->success) ? $resultObj->success : ""); ?><br />
			<?php echo (isset($resultObj->statuscode) ?
				$resultObj->statuscode : ""); ?><br />
			<?php echo (isset($resultObj->statusdesc) ?
			json_encode($resultObj->statusdesc) : ""); ?><br />
			<br />
			<strong>Debug log:</strong><br />
			<?php echo (isset($debuglog) ? htmlentities($debuglog) : ""); ?><br />
			
			</form>
			</div>
        </div>
    </div>
		<div class="footer">
			<div class="wrap">
        
			</div>
		</div>
    </div>
    </body>
    </html>
