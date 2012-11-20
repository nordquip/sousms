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

include("login.include.php");
include $_SERVER['DOCUMENT_ROOT'] . '/webServiceCaller.include.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<title>Sell Stock</title>
<META NAME="ROBOTS" CONTENT="NONE, NOARCHIVE">
<META NAME="GOOGLEBOT" CONTENT="NOARCHIVE">
<meta http-equiv="Expires" content="Tue, 04 Dec 1997 21:29:02 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<link rel="stylesheet" type="text/css" href="2leveltab.css" />
<script type="text/javascript" src="2leveltab.js"></script>
<style type="text/css">
@import "gallery.css";
</style>
</head>

<body>

<a name="glosstop"></a> <center><img src="images/banner.jpg" width="810" height="160" alt="NASDAQ Ninja logo" /></center>
<!-- end #header -->

<!-- begin menu stuff -->
<ul id="maintab" class="basictab">
			<li rel="homesubs"><a href="home.php"><img 

src="images/Home.jpg" onmouseover=this.src="images/Homeselected.jpg" 

onmouseout=this.src="images/Home.jpg" /></a></li>
			<li rel="tradesubs"><a href="trading.php"><img 

src="images/Trade.jpg" onmouseover=this.src="images/Tradeselected.jpg" 

onmouseout=this.src="images/Trade.jpg" /></a></li>
            <li rel="looksubs"><a href="lookup.php"><img src="images/Lookup.jpg" 

onmouseover=this.src="images/Lookupselected.jpg" onmouseout=this.src="images/Lookup.jpg" /></a></li>
			<li rel="setsubs"><a href="settings.php"><img 

src="images/Settings.jpg" onmouseover=this.src="images/Settingsselected.jpg" 

onmouseout=this.src="images/Settings.jpg" /></a></li>
            <li class="selected" rel="helpsubs"><a href="help.php"><img src="images/Help.jpg" 

onmouseover=this.src="images/Helpselected.jpg" onmouseout=this.src="images/Help.jpg" /></a></li>
            <li rel="aboutsubs"><a href="about.php"><img src="images/About_Us.jpg" 

onmouseover=this.src="images/About_Usselected.jpg" onmouseout=this.src="images/About_Us.jpg" 

/></a></li>
            <li rel="contactsubs"><a href="contact.php"><img src="images/Contact_Us.jpg" 

onmouseover=this.src="images/Contact_Usselected.jpg" onmouseout=this.src="images/Contact_Us.jpg" 

/></a></li>
            
            
            
            
            

</ul>

<div id="homesubs" class="submenustyle">

</div>

<div id="tradesubs" class="submenustyle">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="buy.php">Buy</a>
<a href="sell.php">Sell</a>
<a href="currentcash.php">Current Cash</a>
<a href="tradehistory.php">Trade History</a>
</div>

<div id="looksubs" class="submenustyle">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="newspg.php">NASDAQ News</a>

</div>

<div id="setsubs" class="submenustyle">

</div>

<div id="helpsubs" class="submenustyle">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="faq.php"><img src="images/FAQ.jpg" onmouseover=this.src="images/FAQselected.jpg" 

onmouseout=this.src="images/FAQ.jpg" /></a>
<a href="glossary.php"><img src="images/Glossaryselected.jpg" 

onmouseover=this.src="images/Glossaryselected.jpg" onmouseout=this.src="images/Glossaryselected.jpg" /></a>
</div>

<div id="aboutsubs" class="submenustyle">

</div>

<div id="contactsubs" class="submenustyle">

</div>


<script type="text/javascript">
//initialize tab menu, by passing in ID of UL
initalizetab("maintab")
</script>

<!-- end #menu -->

<!--begin sell form -->
<div align="center">
<table>
<tr>
<td>	
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
	<fieldset>
	<legend>Sell Stock:</legend><br /><br />
    <input type="hidden" name="department" value="TE" />
    <input type="hidden" name="transtype" value="marketSell" />
    Symbol: <select name="symbol">
										<option value="AAPL">Apple</option><option value="ADBE">Adobe Systems Incorporated</option>
										<option value="ADSK">Autodesk, Inc.</option>
										<option value="ALU">Alcatel / Lucent</option>
										<option value="AMZN">Amazon</option>
										<option value="ATVI">Activision Blizzard</option>
										<option value="AXP">American Express</option>
										<option value="CAKE">The Cheesecake Factory INC</option>
										<option value="CMCSA">Comcast</option>
										<option value="COKE">Coca-Cola</option>
										<option value="CSCO">Cisco</option>
										<option value="DIS">Disney</option>
										<option value="DNKN">Dunkin Donuts</option>
										<option value="EBAY">Ebay</option>
										<option value="ERTS">Electronic Arts</option>
										<option value="FB">Facebook</option>
										<option value="GE">General Electric</option>
										<option value="GOOG">Google</option>
										<option value="GRMN">Garmin</option>
										<option value="HAS">Hasbro</option>
										<option value="HSY">Hershey</option>
										<option value="HOTT">Hot Topic</option>
										<option value="INTC">Intel Corporation</option>
										<option value="JBLU">Jetblue Airways Corp</option>
										<option value="MON">Monsanto</option>
										<option value="MSFT">Microsoft</option>
										<option value="NFLX">Netflix</option>
										<option value="NVDA">NVIDIA Corporation</option>
										<option value="ORCL">Oracle</option>
										<option value="PBG">Petrobank Energy and Resources</option>
										<option value="QCOMM">Qualcomm</option>
										<option value="RCL">Royal Caribbean Cruises</option>
										<option value="SBUX">Starbucks</option>
										<option value="SIRI">Sirius Satellite</option>
										<option value="SPLS">Staples</option>
										<option value="TTWO">Take-Two Interactive Software, Inc.</option>
										<option value="TXN">Texas Instruments</option>
										<option value="V">Visa</option>
										<option value="VOD">Vodafone</option>
										<option value="YHOO">Yahoo</option>
										<option value="ZNGA">Zynga Inc.</option>
									</select><br /><br />
	Number of Shares: <input type="text" name="shares"><br />
    <br />
    <input type="submit" value="Submit" /><br />
	</fieldset>
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
</tr>
</td>
</table>
</div>
<!--end sell form stuff -->

<div id="footer">
	<p> &copy; 2012 Southern Oregon University 1250 Siskiyou Boulevard Ashland, OR 97520 541-552-7672</p>
    <p> Webpages may include live content from third parties.</p>
    <p> Allergy Information:  Transmitted on a network that also transmits pictures of tree nuts.</p>
    <p> </p>
</div>
<!-- end #footer -->
</body>

</html>