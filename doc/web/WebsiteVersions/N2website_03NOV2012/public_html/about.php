
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
<title>About NASDAQ Ninja</title>
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
            <li rel="looksubs"><a href="lookup.php"><img src="images/Lookup.jpg" 

onmouseover=this.src="images/Lookupselected.jpg" onmouseout=this.src="images/Lookup.jpg" /></a></li>
			<li rel="setsubs"><a href="settings.php"><img 

src="images/Settings.jpg" onmouseover=this.src="images/Settingsselected.jpg" 

onmouseout=this.src="images/Settings.jpg" /></a></li>
            <li rel="helpsubs"><a href="help.php"><img src="images/Help.jpg" 

onmouseover=this.src="images/Helpselected.jpg" onmouseout=this.src="images/Help.jpg" /></a></li>
            <li class="selected" rel="aboutsubs"><a href="about.php"><img src="images/About_Usselected.jpg" 

onmouseover=this.src="images/About_Usselected.jpg" onmouseout=this.src="images/About_Usselected.jpg" 

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
						<h2 class="title">About Us</h2>
                        <p class="meta"><span class="posted"> </span></p>
                        <div style="clear: both;">&nbsp;</div>
                        <div class="entry">
                          <h1><br />
                          The Web Team </h1>
                          <p>&nbsp;</p>
                          <p>All team members have contributed tremendously to all aspects and elements of the site. The list of contributions by each team member continues to expand far above and beyond the few aspects mentioned below.</p>
                          <p>&nbsp;</p>
                          <p>The Web Team Members are:</p>
                          <p>Melissa Dadoly: Team Coordination, CSS, Site Structure, Glossary<br />
                            Jesse Allred: HTML, Site Graphics, Conceptual Design, FAQ<br />
                            John Rekow: HTML, Javascript, CSS, Site Construction<br />
                            Paul Treagan: Site Structure, Navigation, Graphics, Color Scheme<br />
                            Tamarra Phillips: HTML, Site Graphics, Login, Security Structure</p>
                          <p>&nbsp;</p>
                        </div>
						<h2 class="title">&nbsp;</h2>
						<h2 class="title"><a href="#">History</a></h2>
						<p class="meta"><span class="posted"> </span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p><br />
						    The Earth was formed, man showed up, discovered America, and invented NASDAQ Ninja. The rest is history.</p>
							<p></p>
<p class="links">&nbsp;</p>
						</div>
					</div>
					<div class="post">
						<h2 class="title"><a href="#">Mission Statement</a></h2>
						<p class="meta"><span class="date"> </span><span class="posted"> </span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p>Our awesome mission statement, expertly written like a boss, is to boldly trade in a way like no one has traded before.<br />
							</p>
							<p class="links"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
                    					<div class="post">
						<h2 class="title"><a href="#">Purpose</a></h2>
						<p class="meta"><span class="date"> </span><span class="posted"> </span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p>Our purpose is to give the planet Earth a little glimpse of our awesomeness.</p>
<p class="links"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
                    					<div class="post">
						<h2 class="title"><a href="#">Philosphy</a></h2>
						<p class="meta"><span class="date"> </span><span class="posted"> </span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p>&quot;To avoid analysis paralysis, recognize that you won't get everything right the first time through. It just isn't possible.&quot;</p>
							<p>- Tom Pender, author of <em>UML Bible</em>.<br />
						  </p>
							<p class="links"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<h2>About Us</h2>
							<p> </p>
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
