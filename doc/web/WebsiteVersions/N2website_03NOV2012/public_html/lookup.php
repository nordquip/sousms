
<? 
/******************************************************************
* trade.php
* By: Jeff Miller (millerj3@students.sou.edu), 2012-10-24
* Description: Example of a page that requires login to access.
******************************************************************/

include("login.include.php");
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
<title>N2 Lookup and Search</title>
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
<script language="JavaScript">
function dosearch() {
var sf=document.searchform;
for (i=sf.sengines.length-1; i > -1; i--) {
if (sf.sengines[i].checked) {
var submitto = sf.sengines[i].value + escape(sf.searchterms.value);
}
}
window.location.href = submitto;
return false;
}
</script>
</head>
<body>
		<center><img src="images/banner.jpg" width="810" height="160" alt="NASDAQ Ninja logo" 

/></center>
	<!-- end #header -->
    <ul id="maintab" class="basictab">
			<li rel="homesubs"><a href="home.php"><img 

src="images/Home.jpg" onmouseover=this.src="images/Homeselected.jpg" 

onmouseout=this.src="images/Home.jpg" /></a></li>
			<li rel="tradesubs"><a href="trading.php"><img 

src="images/Trade.jpg" onmouseover=this.src="images/Tradeselected.jpg" 

onmouseout=this.src="images/Trade.jpg" /></a></li>
            <li class="selected" rel="looksubs"><a href="lookup.php"><img src="images/Lookupselected.jpg" 

onmouseover=this.src="images/Lookupselected.jpg" onmouseout=this.src="images/Lookupselected.jpg" /></a></li>
			<li rel="setsubs"><a href="settings.php"><img 

src="images/Settings.jpg" onmouseover=this.src="images/Settingsselected.jpg" 

onmouseout=this.src="images/Settings.jpg" /></a></li>
            <li rel="helpsubs"><a href="help.php"><img src="images/Help.jpg" 

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
<a href="glossary.php"><img src="images/Glossary.jpg" 

onmouseover=this.src="images/Glossaryselected.jpg" onmouseout=this.src="images/Glossary.jpg" /></a>
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
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					
<div class="post">
						<h2 class="title"><a href="#">Lookup</a></h2>
						<p class="meta"><span class="posted"><a href="#"></a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p>
<form style="background-color: #FFFFFF" name="searchform" onSubmit="return dosearch();">
Search: <small><code>(This search engine will take you to other websites.)</code></small><br />
<input name="sengines" type="radio" CHECKED value="http://www.nasdaq.com/symbol/"> Check a NASDAQ symbol right now (type in a symbol below)</value>&nbsp;&nbsp;&nbsp;&nbsp;
<br />
<input name="sengines" type="radio" value="http://search.nasdaq.com/search?btnG.x=18&btnG.y=15&btnG=Search&client=default_frontend&output=xml_no_dtd&proxystylesheet=default_frontend&sort=date%3AD%3AL%3Ad1&entqr=3&oe=UTF-8&ie=UTF-8&ud=1&site=default_collection&q="> Search NASDAQ (type a company name, symbol or other keywords to search for)</value>&nbsp;&nbsp;&nbsp;&nbsp;
<br />

Search for this: 
<input type="text" name="searchterms" size=55>
<input type="submit" name="SearchSubmit" value="Search">
</form></p>
							<p class="links">&nbsp;</p>
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
					
                        <li>
 
						</li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p> &copy; 2012 Southern Oregon University 1250 Siskiyou Boulevard Ashland, OR 97520 541-552-7672</p>
    <p> Webpages may include live content from third parties.</p>
    <p> Allergy Information:  Transmitted on a network that also transmits pictures of tree nuts.</p>
    <p> </p>
</div>
<!-- end #footer -->
</body>
</html>
