
<?php
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
<title>N2 Day Order</title>
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
<body><a name="glosstop"></a>
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
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					
<div class="post">
						<h2 class="title"><a href="#">Glossary</a>			</h2>
<p class="meta"><span class="posted"><a href="#"></a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
						  <p>On a PC, hold down the Ctrl button and press F. The F stands for &quot;find.&quot; Type part of a word, and if that word is on this page, you will be able to jump down the page to where the match is found. This feature is available in all browsers, but the way how it looks will vary slightly from browser to browser.<br />
					      </p>
                          <p>Jump down this page to the glossary words starting with the letter...<br />
                          <A HREF="#glossA"> A </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossB"> B </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossC"> C </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossD"> D </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossE"> E </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossF"> F </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossG"> G </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossH"> H </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossI"> I </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossJ"> J </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossK"> K </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossL"> L </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossM"> M </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossN"> N </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossO"> O </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossP"> P </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossQ"> Q </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossR"> R </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossS"> S </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossT"> T </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossU"> U </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossV"> V </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossW"> W </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossX"> X </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossY"> Y </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A HREF="#glossZ"> Z </A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          </p>
                          
<p class="links">&nbsp;</p>
						</div>
					</div>
					<div class="post">
						<h2 class="title">0-9</h2>
						<p class="meta"><span class="date"> </span><span class="posted"> </span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
							<p>There are no entries that start with a number.
							</p><A NAME="glossA"> A </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Aa</h2><p>

<br /><br />Advanced Companies<br /><br />
Companies listed on TSX Venture Exchange that meet higher asset, market value and shareholder distribution requirements than those classified as venture companies. This classification is related to TSX Venture Exchange Tier 1 status.

<br /><br />Agent	<br /><br />
A securities firm is classified as an agent when it acts on behalf of its clients as buyer or seller of a security. The agent does not own the security at any time during the transaction.

<br /><br />Alberta Securities Commission (ASC)<br /><br />
The provincial regulatory agency responsible for overseeing the capital market in Alberta.

<br /><br />All-or-None Order<br /><br />
An order that must be filled completely or the trade will not take place.

<br /><br />American-Style Options<br /><br />
Options that can be exercised any time during their lifetime. These are also known as open options.

<br /><br />Annual Report<br /><br />
A publication, including financial statements and a report on operations, issued by a company to its shareholders at the company's fiscal year-end.

<br /><br />Anonymous Trading<br /><br />
Permits Participating Organizations to voluntarily withhold their true broker identities when entering orders and trades on TSX trading systems.

<br /><br />Arbitrage<br /><br />
The simultaneous purchase of a security on one stock market and the sale of the same security on another stock market at prices which yield a profit.

<br /><br />Ask or Offer<br /><br />
The lowest price at which someone is willing to sell the security. When combined with the bid price information, it forms the basis of a stock quote.

<br /><br />Ask Size<br /><br />
The aggregate size in board lots of the most recent ask to sell a particular security.

<br /><br />Assets<br /><br />
Everything a company or person owns, including money, securities, equipment and real estate. Assets include everything that is owed to the company or person. Assets are listed on a company's balance sheet or an individual's net worth statement.

<br /><br />Assignment<br /><br />
The notification to the seller of an option by the clearing corporation that the buyer of the option is enforcing the terms of the option's contract.

<br /><br />At-the-Money<br /><br />
When the price of the underlying equity, index or commodity equals the strike price of the option.

<br /><br />Averages and Indices<br /><br />
Statistical tools that measure the state of the stock market or the economy, based on the performance of stocks, bonds or other components. Examples are the S&P/TSX Venture Composite Index, the S&P/TSX Composite Index, the Dow Jones Industrial Average and the Consumer Price Index.

<br /><br />Averaging Down<br /><br />
Buying more of a security at a price that is lower than the price paid for the initial investment. The aim of averaging down is to reduce the average cost per unit of the investment.



</p><A NAME="glossB"> B </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Bb</h2><p>

<br /><br />Basis Point<br /><br />
One-hundredth of a percentage point. For example, the difference between 5.25% and 5.50% is 25 basis points.

<br /><br />Bear Market<br /><br />
A market in which stock prices are falling.

<br /><br />Best-Efforts Underwriting<br /><br />
A type of underwriting where the investment firm acts as an agent. The firm agrees to use its best efforts to sell the new issue of securities, but does not guarantee the issuing company that the securities to be issued will be sold.

<br /><br />Beta<br /><br />
A measurement of the relationship between the price of a stock and the movement of the whole market.

<br /><br />Better-Price-Limit Orders<br /><br />
An order with a limit price better than the best price on the opposite side of the market. A better-priced buy order has a limit price higher than the best offering. A better-priced sell order has a limit price lower than the best bid. These are available only at the opening.

<br /><br />Bid<br /><br />
The highest price a buyer is willing to pay for a stock. When combined with the ask price information, it forms the basis of a stock quote.

<br /><br />Bid Size<br /><br />
The aggregate size in board lots of the most recent bid to buy a particular security.

<br /><br />Black-Scholes Model<br /><br />
A mathematical model used to calculate the theoretical price of an option.

<br /><br />Block Trades<br /><br />
Trades greater than or equal to 10,000 shares in size and greater than or equal to $100,000 in value.

<br /><br />Blue Chip Stocks<br /><br />
Stocks of leading and nationally known companies that offer a record of continuous dividend payments and other strong investment qualities.

<br /><br />Board Lot<br /><br />
A standard trading unit as defined in UMIR (Universal Market Integrity Rules). The board lot size of a security on Toronto Stock Exchange or TSX Venture Exchange depends on the trading price of the security, as follows:
- Trading price per unit is less than $0.10 board lot size is 1,000 units
- Trading price per unit is $0.10 to $0.99 board lot size is 500 units
- Trading price per unit is $1.00 or more board lot size is 100 units
<br /><br />Bonds<br /><br />
Promissory notes issued by a corporation or government to its lenders, usually with a specified amount of interest for a specified length of time.

<br /><br />Book<br /><br />
An electronic record of all pending buy and sell orders for a particular stock.

<br /><br />Booked Orders<br /><br />
Orders that do not trade immediately upon entry. These orders are also known as outstanding orders.

<br /><br />Bought-Deal Underwriting<br /><br />
A type of underwriting where the brokerage firm acts as principal. The brokerage firm risks its own capital to purchase all of the securities to be issued. If the price of the securities decreases before the brokerage firm has had a chance to resell the securities to its clients, the firm absorbs the loss.

<br /><br />British Columbia International Commercial Arbitration Centre (BCICAC)<br /><br />
An arbitration centre established to resolve business disputes that have not been resolved through normal channels. As part of its services, the centre will accept claims up to $50,000 from clients of participating members of the Investment Dealers Association of Canada (Pacific Division) and TSX Venture Exchange.

<br /><br />British Columbia Securities Commission (BCSC)<br /><br />
The provincial government agency responsible for administering and enforcing the Securities Act and the Commodity Contract Act of British Columbia.

<br /><br />Broker or Brokerage Firm<br /><br />
A securities firm or a registered investment advisor affiliated with a firm. Brokers are the link between investors and the stock market. When acting as a broker for the purchase or sale of listed stock, the investment advisor does not own the securities but acts as an agent for the buyer and seller and charges a commission for these services.

<br /><br />Bull Market<br /><br />
A market in which stock prices are rising.

<br /><br />Business Day<br /><br />
Any day from Monday to Friday, excluding statutory holidays.

<br /><br />Business Trust<br /><br />
A trust that usually generates cash flows from one business or operating company, unlike an investment fund, which generates income from a diversified pool or portfolio. The trust holds debt and equity interests of an operating business. Businesses that exhibit these characteristics may opt for a trust structure over a corporate structure to take advantage of tax efficiency.

<br /><br />Buy-In<br /><br />
If a broker fails to deliver securities sold to another broker on the settlement date, the receiving broker may buy the securities at the current market price of the stock and charge the delivering broker the cost difference of such a purchase.



</p><A NAME="glossC"> C </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Cc</h2><p>

<br /><br />Call Option<br /><br />
An option which gives the holder the right, but not the obligation, to buy a fixed amount of a certain stock at a specified price within a specified time. Calls are purchased by investors who expect a price increase.

<br /><br />Canadian Depository for Securities Limited (CDS)<br /><br />
Canada's national securities depository, Canadian Depository for Securities Limited (CDS), provides clearing and settlement services in support of trading in equity, fixed income, and money markets. CDS is owned by major Canadian chartered banks, members of the Investment Dealers Association of Canada (IDA), and TSX Inc. CDS is regulated by the Ontario Securities Commission, L'Autorité des marchés financiers (the securities commission of Quebec), and the Bank of Canada.

<br /><br />Canadian Derivatives Clearing Corporation (CDCC)<br /><br />
The designated central clearing corporation for options and futures trading on the Bourse de Montréal. Previously known as Trans Canada Options Inc. (TCO).

<br /><br />Canadian Investor Protection Fund (CIPF)<br /><br />
A fund established to protect customers in the event of insolvency of a member of any of the following sponsoring self-regulatory organizations: the Bourse de Montréal, Toronto Stock Exchange, TSX Venture Exchange and the Investment Dealers Association of Canada.

<br /><br />Canadian Securities Institute (CSI)<br /><br />
The national educational organization of the securities industry sponsored by the Investment Dealers Association of Canada, Toronto Stock Exchange, the Bourse de Montréal and TSX Venture Exchange.

<br /><br />Capital<br /><br />
To an economist, capital means machinery, factories and inventory required to produce other products. To investors, capital means their cash plus the financial assets they have invested in securities, their home and other fixed assets.

<br /><br />Capital Gain or Loss<br /><br />
Profit or loss resulting from the sale of certain assets classified under the federal income tax legislation as capital assets. This includes stocks and other investments such as investment property.

<br /><br />Capital Gains Distribution<br /><br />
A taxable distribution out of taxable gains realized by the issuer. It is generally paid to security holders of trusts, partnerships, and funds. Like all distributions, it may be paid in securities or cash. The amount, payable date, and record date are established by the issuer. The exchange that the issue is listed on sets the ex-dividend/distribution (ex-d) date for entitlement.

<br /><br />Capital Pool Companies<br /><br />
The TSX Venture Exchange Capital Pool Company (CPC) program offers a unique listing opportunity that brings experienced management teams with proven public financing ability together with development-stage companies in need of capital and management expertise. Unlike traditional public companies, capital pools list and begin trading without an operating business. The nature of their business is to find and acquire a promising early-stage venture, and their treasuries are funded expressly for the search and due diligence process.

<br /><br />Capital Stock<br /><br />
All shares representing ownership of a company, including preferred and common shares.

<br /><br />Capital Trust<br /><br />
A form of financial trust that differs from other trusts in that it looks more like a fixed income instrument than an equity issue. Capital trusts are generally issued by banks or other financial intermediaries. These investment vehicles trade like a debt instrument with $1,000 face value and trade with accrued interest.

The business objective of capital trusts is to acquire and hold assets that will generate net income for distribution to unit holders. The trust's assets may consist of residential mortgages, mortgage co-ownership interests, mortgage-backed securities, other eligible investments, and other qualified debt obligations. Capital trust assets are usually acquired from and serviced by the issuing institution and/or its affiliates.

<br /><br />Capitalization Change<br /><br />
Any change in the issued and outstanding listed securities of an issuer. This change may involve the issuance, repurchase, or cancellation of listed securities or listed securities that are issuable upon conversion or exchange of other securities of an issuer.

<br /><br />Capitalization Effective Date<br /><br />
The date that the capitalization change is reflected in the issuer's share register, regardless of when it is reported to the Exchange.

<br /><br />Capitalization or Capital Structure<br /><br />
Total dollar amount of all money invested in a company, such as debt, preferred and common stock, contributed surplus and retained earnings of a company.

<br /><br />Capped Indices<br /><br />
Indices for which there is a maximum relative weight by market capitalization for any one constituent. Any individual constituent of the index can represent no more than a specified percent of the index. The individual constituents of the S&P/TSX Capped Composite and S&P/TSX Capped 60 indices are capped at 10%, while the individual constituents of the S&P/TSX Capped sector indices are capped at 25%.

<br /><br />Cash<br /><br />
A special term attached to an equity order that requires the trade to be settled either the same day or the following business day for cash.

<br /><br />Cash Dividend / Distribution<br /><br />
A dividend/distribution that is paid in cash.

<br /><br />Cash Settlement<br /><br />
Settlement of an option contract not by delivery of the underlying shares, but by a cash payment of the difference between the strike or exercise price and the underlying settlement price.

<br /><br />Certificate<br /><br />
The physical document that shows ownership of a bond, stock or other security.

<br /><br />Changes in Stock List<br /><br />
Any modification to the list of tradable issues of an exchange. These modifications include: new listings, supplemental security listings, substitutional listings, deletions, name changes, and stock symbol changes.

<br /><br />CL1<br /><br />
TSX Venture Level 1 (CL1) is a real-time service for listed junior equities that provides trades, quotes, corporate actions and index information from TSX Venture Exchange.

<br /><br />CL2<br /><br />
TSX Venture Level 2 (CL2) is a real-time service for junior equities that shows all of the committed orders and trades for each TSX Venture Exchange listed security in real time.

<br /><br />Clearing Day<br /><br />
Any business day on which the clearing corporation is open to effect trade clearing and settlement.

<br /><br />Clearing Number<br /><br />
The trading number of the clearing Participating Organization or Member.

<br /><br />Client Order<br /><br />
An order from a retail customer of a Participating Organization.

<br /><br />Closed-End Investment Fund<br /><br />
An investment trust that issues a fixed number of securities that trade on a stock exchange or in the over-the-counter market. Assets of a closed-end fund are professionally managed in accordance with the fund's investment objective and policies and may be invested in a wide range of financial instruments/assets. Like other publicly traded securities, the market price of closed-end fund securities fluctuates and is determined by supply and demand in the marketplace.

<br /><br />Closing Transaction<br /><br />
An order to close out an existing open futures or options contract.

<br /><br />Commission<br /><br />
The fee charged by an investment advisor or broker for buying or selling securities as an agent on behalf of a client.

<br /><br />Commodities<br /><br />
Products used for commerce that are traded on a separate, authorized commodities exchange. Commodities include agricultural products and natural resources such as timber, oil and metals. Commodities are the basis for futures contracts traded on these exchanges.

<br /><br />Common Shares or Common Stock<br /><br />
Securities that represent part ownership in a company and generally carry voting privileges. Common shareholders may be paid dividends, but only after preferred shareholders are paid. Common shareholders are last in line after creditors, debt holders and preferred shareholders to claim any of a company's assets in the event of liquidation.

<br /><br />Complete Fill<br /><br />
When an order trades all of its specified volume.

<br /><br />Conditional Listing Application (CLA)<br /><br />
When a company applies to list on Toronto Stock Exchange, a CLA consists of the Toronto Stock Exchange listing agreement and the company's prospectus.

<br /><br />Consolidated Short Position Report<br /><br />
A consolidated report that includes the total shares short (as of the trade date) and the net change from the previous report, for both TSX and TSX Venture Exchange listed issues. Under UMIR rule 10.10, all TSX and TSX Venture Exchange Participating Organizations and Members must report the firm's short position on a semi-monthly basis to TSX Datalinx. Non-clearing firms may report through the firm that is responsible for their clearing.

<br /><br />Continuous Disclosure<br /><br />
A company's ongoing obligation to inform the public of significant corporate events, both favourable and unfavourable.

<br /><br />Convertible Security<br /><br />
A security of an issuer (for example - bonds, debentures, or preferred shares) that may be converted into other securities of that issuer, in accordance with the terms of the conversion feature. The conversion usually occurs at the option of the holder of the securities, but it may occur at the option of the issuer.

<br /><br />Corporation or Company<br /><br />
A form of business organization created under provincial or federal laws that has a legal identity separate from its owners. The shareholders are the corporation's owners and are liable for the debts of the corporation only up to the amount of their investment. This is known as limited liability.

<br /><br />Cross<br /><br />
A trade that occurs when two accounts within the same Participating Organization/Member wish to buy and sell the same security at an agreed price and volume. With some approved exceptions, crosses can only occur within the current bid and ask for the stock.

<br /><br />Crossing Session<br /><br />
After the close of the regular trading day, crosses can be executed between 4:10 p.m. and 5:00 p.m. ET at the last sale price of the stock.

<br /><br />Cum Dividend<br /><br />
With dividend. The owner of shares purchased cum dividend is entitled to an upcoming already-declared dividend. The opposite of this is ex dividend.

<br /><br />Cum Rights<br /><br />
With rights. The owner of shares purchased cum rights is entitled to forthcoming, already-declared rights. The opposite of this is ex rights.

<br /><br />Cum-Dividend/Distribution Date<br /><br />
The trading day before the ex-dividend/distribution (ex-d) date. It is the last day on which the securities can be traded and on which the buyer is entitled to the dividend/distribution.

<br /><br />CUSIP<br /><br />
CUSIP © (Committee on Uniform Security Identification Procedures) is a standard system of securities identification and securities description, which is used in electronic processing and recording of securities transactions in North America. As a service bureau to the Canadian financial industry, CDS INC., a subsidiary of CDS, acts as liaison between Standard & Poor's (S&P) and the issuing companies for the assignment of CUSIP numbers and descriptions. A CUSIP number uniquely identifies a Canadian or American security issue and its issuer.

<br /><br />Cyclical Stock<br /><br />
A stock of a company in an industry sector that is particularly sensitive to swings in economic conditions.



</p><A NAME="glossD"> D </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Dd</h2><p>

<br /><br />Daily Price Limit<br /><br />
The maximum price advance or decline permitted for a futures contract in one trading session compared to the previous day's settlement price.

<br /><br />Day Order<br /><br />
An order that is valid only for the day it is entered. If the order is still outstanding when the market closes, it will be purged overnight.

<br /><br />Debenture<br /><br />
A long-term debt instrument issued by corporations or governments that is backed only by the integrity of the borrower, not by collateral. A debenture is unsecured and subordinate to secured debt. A debenture is unsecured in that there are no liens or pledges on specific assets.

<br /><br />Debt Price<br /><br />
The price paid per $100 of a debt instrument's face value traded. A debt instrument trading at par would have a price of $100. A price below face value (for example, $99.1) indicates that the debt instrument has traded at a discount. A price above face value (for example, $101.1) indicates that the debt instrument has traded at a premium.

<br /><br />Debt Value<br /><br />
The total dollar value of volume traded on one side of the transaction for a specified period. It equals price multiplied by volume divided by 100.

<br /><br />Debt Volume<br /><br />
The number of debt instruments traded on one side of the transaction for a specified period multiplied by the face value of the debt instrument.

<br /><br />Defensive Stock<br /><br />
A stock purchased from a company that has maintained a record of stable earnings and continuous dividend payments through periods of economic downturn.

<br /><br />Delayed Delivery Order<br /><br />
A special term order in which there is a clear understanding between the buying and selling parties that the delivery of the securities will be delayed beyond the usual three-day settlement period to the date specified in the order.

<br /><br />Delist<br /><br />
The removal of a security's listing on a stock exchange. This is done when the security no longer exists, the company is bankrupt, the public distribution of the security has dropped to an unacceptably low level, or the company has failed to comply with the terms of its listing agreement.

<br /><br />Delisted Issue<br /><br />
The status of a security that is no longer listed on the Exchange. The security could trade on another market.

<br /><br />Delisted Issuer<br /><br />
An issuer whose securities are no longer listed on Toronto Stock Exchange or TSX Venture Exchange. A listed issuer is delisted when the last listed security of the issuer is delisted.

<br /><br />Delivery<br /><br />
The tender and receipt of the underlying commodity or the payment or receipt of cash in the settlement of an open futures contract.

<br /><br />Delivery Month<br /><br />
The calendar month in which a futures contract may be satisfied by making or taking delivery.

<br /><br />Delta<br /><br />
A ratio that measures an option's price movement compared to the underlying interest's price movement. Delta values have a range of 0 to 1. Deep in-the-money options have deltas that approach 1.

<br /><br />Demand<br /><br />
The combined desire, ability and willingness on the part of consumers to buy goods or services. Demand is determined by income and by price, which are, in part, determined by supply.

<br /><br />Discretionary Account<br /><br />
A securities account created when a client gives a partner, director or qualified portfolio manager of a Participating Organization specific written authorization to select securities and execute trades on the client's behalf.

<br /><br />Distribution<br /><br />
The portion of the issuer's equity paid directly to the security holders. It is generally paid to security holders of trusts, partnerships, and funds. The issuer or its representative provides the amount, frequency (monthly, quarterly, semi-annually, or annually), payable date, and record date. The exchange that the issue is listed on sets the ex-dividend/distribution (ex-d) date for entitlement.

<br /><br />Diversification<br /><br />
Limiting investment risk by purchasing different types of securities from different companies representing different sectors of the economy.

<br /><br />Dividend<br /><br />
The portion of the issuer's equity paid directly to shareholders. It is generally paid on common or preferred shares. The issuer or its representative provides the amount, frequency (monthly, quarterly, semi-annually, or annually), payable date, and record date. The exchange that the issue is listed on sets the ex-dividend/distribution (ex-d) date for entitlement. An issuer is under no legal obligation to pay either preferred or common dividends.

<br /><br />Dividend Reinvestment Plan<br /><br />
A means of reinvesting dividends, which would otherwise be paid to the shareholder in cash, in additional stock of the company.

<br /><br />Dividend Yield<br /><br />
Equal to the indicated annual dividend rate per share divided by the security's price. For example, if the indicated dividend rate is $1.00 and the closing price is $50.00, $1 divided by $50.00 equals 2%.

<br /><br />Dividend/Distribution Payable Date<br /><br />
The date set by the issuer on which the dividend/distribution will be paid.

<br /><br />Dividend/Distribution Record Date<br /><br />
The date on which a security holder must be registered as a holder of an issue to receive the dividend/distribution.

<br /><br />Dollar Cost Averaging<br /><br />
Investing a fixed amount of dollars in a specific security at regular set intervals over a period of time. Dollar cost averaging results in a lower average cost per share, compared with purchasing a constant number of shares at set intervals. The investor buys more shares when the price is low and buys fewer shares when the price is high.

<br /><br />Dow Jones Industrial Average (DJIA)<br /><br />
An average made up of 30 actively traded stocks. The DJIA is calculated by adding the prices of each of the 30 stocks and dividing by a divisor. The DJIA is one of the most widely quoted stock market averages in the media.

<br /><br />Downtick<br /><br />
A trade is on a downtick when the last trade occurred at a price lower than the previous one.



</p><A NAME="glossE"> E </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Ee</h2><p>

<br /><br />Energy or Royalty Trust<br /><br />
Investment vehicles that may engage in the development, acquisition, and/or production of oil and gas reserves. The trust receives royalty income from producing properties (essentially, net cash flow) and then sells interests in the trust (called trust units) to investors. Conventional oil and gas royalty trusts are actively managed portfolios holding assets of mature producing properties. Substantially all of the cash flow generated by the oil and gas assets, net of certain deductions, such as administrative expenses and management fees, is passed on to the unit holders as royalty income. Capital expenses may also be deducted, but are usually subject to restrictions on the amount. The distributions are highly dependent upon the cash flow generated by the trust. In general, the largest variable in determining the level of cash flow is the price of crude oil and natural gas.

Royalty trusts provide an alternative (from owning the shares of individual companies) for investors to participate in the oil and gas sector.

<br /><br />Equities<br /><br />
Common and preferred stocks, which represent a share in the ownership of a company.

<br /><br />Equity Financing<br /><br />
The dollar value of securities issued in accordance with a TSX or TSX Venture Exchange approved transaction. The value equals the number of securities multiplied by the offering price. The various forms of financial instruments may have an effect on determining the price or the number of securities.

<br /><br />Equity Option<br /><br />
An option contract that grants the holder the right to buy or sell a specific number of shares of stock at a specified price during a specific period of time.

<br /><br />Equity Price<br /><br />
The price per share traded.

<br /><br />Equity Value<br /><br />
The total dollar value of volume traded on one side of the transaction for a specified period. It equals price multiplied by volume.

<br /><br />Equity Volume<br /><br />
The total number of shares traded on one side of the transaction.

<br /><br />Escrowed Securities<br /><br />
The outstanding securities of an issuer that are not freely tradable, because they are subject to an escrow agreement that restricts the ability of certain security holders of that issuer from trading or otherwise dealing in those securities until certain conditions are satisfied.

<br /><br />European-Style Option<br /><br />
Options that can be exercised only on their expiration date.

<br /><br />Ex Dividend<br /><br />
The holder of shares purchased ex dividend is not entitled to an upcoming already-declared dividend, but is entitled to future dividends.

<br /><br />Ex Right<br /><br />
The holder of shares purchased ex rights is not entitled to already-declared rights, but is entitled to future rights issues.

<br /><br />Exchange Offering Prospectus (EOP)<br /><br />
A form of prospectus that allows a company to conduct a prospectus offering through the facilities of a stock exchange, rather than issuing them directly to the public. The company then applies to list the securities on the exchange.

<br /><br />Exchangeable Security<br /><br />
A security of an issuer that is exchangeable for securities of another issuer (usually a subsidiary) in accordance with the terms of the exchange feature. The exchange may be at the option of the holder or at the option of the issuer of the securities.

<br /><br />Exchange-Traded Fund (ETF)<br /><br />
A special type of financial trust that allows an investor to buy an entire basket of stocks through a single security, which tracks and matches the returns of a stock market index. ETFs are considered to be a special type of index mutual fund, but they are listed on an exchange and trade like a stock. Also known as an index participation unit (IPU).

<br /><br />Ex-D Date<br /><br />
Ex-dividend/distribution date. The date that the buyer of a stock is not entitled to the upcoming declared dividend/distribution, because the buyer will not be a holder of record. The ex-d date is two clearing days before the record date. The exchange that the issue is listed on sets the ex-d date.

<br /><br />Exempt Issuer<br /><br />
A listed issuer that has satisfied listing requirements as outlined in Section 502 of the Listing Requirements Manual. An exempt issuer is not subject to special reporting rules. This status is generally reserved for senior listed issuers.

<br /><br />Exercise<br /><br />
The act of an option holder who chooses to take delivery (calls) or make delivery (puts) of the underlying interest against payment of the exercise price.

<br /><br />Expiration Date<br /><br />
The date at which an option contract expires. This means that the option can't be exercised after that date.

<br /><br />Extra Dividend / Distribution<br /><br />
A dividend/distribution paid in addition to the regularly established dividend/distribution of the issuer. Like all dividends/distributions, it may be paid in securities or cash and the amount, payable date, and record date are established by the issuer. The exchange that the issue is listed on sets the ex-dividend/distribution (ex-d) date for entitlement. Extra dividends/distributions are sometimes referred to as special dividends/distributions.



</p><A NAME="glossF"> F </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Ff</h2><p>

<br /><br />Face Value<br /><br />
The cash denomination of the individual debt instrument. It is the amount of money that the holder of a debt instrument receives back from the issuer on the debt instrument's maturity date. Face value is also referred to as par value or principal.

<br /><br />Filing Statement<br /><br />
A disclosure document submitted by a listed company to outline material changes in its affairs. Filing statements are not used for the purposes of a financing.

<br /><br />Fill or Kill (FOK) Order<br /><br />
Is eligible to receive a full fill and if not fully filled is cancelled immediately.

<br /><br />Float Quoted Market Value (QMV)<br /><br />
The last price multiplied by the number of outstanding shares. For the S&P/TSX index, the QMV is based on float shares, not on total outstanding shares. Float shares are total outstanding shares less any control block position, as defined by the Standard & Poor's index methodology.

<br /><br />Floating Rate Security<br /><br />
A security whose interest rate or dividend changes with specified market indicators. A floating rate is one that is based on an administered rate, such as a prime rate.

<br /><br />Flow-Through Shares Financing<br /><br />
The dollar value of flow-through shares issued in accordance with a TSX or TSX Venture Exchange approved transaction. The price is determined by the policies of the TSX Company Manual or TSX Venture Corporate Finance Manual; the price is not adjusted for the value of the flow-through tax benefit available to the security holder. It can be an initial public offering (IPO), secondary offering, or private placement.

<br /><br />Freeze<br /><br />
An interruption in trading on a stock, triggered when an order violates parameters set by TSX.

<br /><br />Frequency<br /><br />
Frequency refers to the given time period on an intraday, daily, weekly, monthly, quarterly or yearly perspective. Typically, choosing a weekly or monthly perspective when looking at several years of data makes it easier to identify long-term trends. Daily charts are useful for active traders and short-term time period charts. 

The "Daily", "1-Minute", "5-Minute", "15-Minute" and "Hourly" frequency are used for intraday charts and the remaining choices are applicable to end-of-day charts. This term refers to a TSX Group Historical Performance charting feature.

<br /><br />Front Month<br /><br />
The closest month to expiration for a futures or option contract.

<br /><br />Futures<br /><br />
Contracts to buy or sell securities at a future date.



</p><A NAME="glossG"> G </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Gg</h2><p>

<br /><br />GICS<br /><br />
The Global Industry Classification Standard (GICS®) is a consistent set of global economic sector and industry definitions. GICS are used to classify the constituents of many indices worldwide. GICS is a four-level classification system. The four levels are: sector, industry group, industry, and sub-industry. Standard & Poor's and Morgan Stanley Capital International (MSCI), two providers of global indices, jointly launched GICS in 1999.

<br /><br />Good Delivery<br /><br />
The term used to describe a security that is in proper form to transfer title, which means that the registered owner has endorsed it. To settle a sale, the certificate must be surrendered on good delivery by the seller. A certificate that bears a share transfer restriction will not constitute good delivery.

<br /><br />Good-Till-Cancelled (GTC) Order<br /><br />
A GTC order will remain in the system until the date that it is filled or until a maximum of 90 calendar days from date of entry, whichever happens first. This type of order is also referred to as an open order. A Participating Organization can cancel a GTC order at any time.

<br /><br />Good-Till-Date (GTD) Order<br /><br />
A GTD order will remain in the system until it is either filled or until the date specified, at which time it is automatically cancelled by the system. This is another kind of open order. A Participating Organization can cancel a GTD order at any time.

<br /><br />Growth Stock<br /><br />
The shares of companies that have enjoyed better-than-average growth over recent years and are expected to continue their climb.

<br /><br />Guaranteed Investment Certificate (GIC)<br /><br />
A deposit instrument most commonly available from trust companies or banks requiring a minimum investment at a predetermined rate of interest for a stated term, such as one or five years. GICs are generally non-redeemable and non-transferable before maturity.



</p><A NAME="glossH"> H </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Hh</h2><p>

<br /><br />Halted Issue<br /><br />
A temporary stoppage of trading of the listed securities of an issuer, which may be imposed by the Exchange, its agent (Market Regulation Services Inc. (RS)), or voluntarily requested by the issuer. Usually an issuer's listed securities are halted pending a public announcement of material information about the issuer, but the Exchange or RS may also impose a halt if the issuer is not in compliance with Exchange requirements or if the Exchange determines that it is in the public interest to do so.

<br /><br />Hedge<br /><br />
A strategy used to limit investment loss by making a transaction that offsets an existing position.

<br /><br />HSDF<br /><br />
High Speed Data Feed is a real-time broadcast of market data related to Toronto Stock Exchange and TSX Venture Exchange markets.



</p><A NAME="glossI"> I </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Ii</h2><p>

<br /><br />If, As & When Issued Trading<br /><br />
Occurs when new securities are posted for trading, and trading takes place before the closing (formal original issuance) of the prospectus. Also known as the "grey market". The term is used only for listing of new securities, either on a listing of a new issuer, a supplemental listing, or an additional listing of existing listed securities. Settlement occurs on the closing of the prospectus. The time from posting for trading to closing is generally within a week.

<br /><br />Improving the Market<br /><br />
An order that either raises the bid price or lowers the offering price is said to be improving the market. The market improves because the spread between the bid and offer decreases.

<br /><br />Income Deposit Security (IDS)<br /><br />
An exchange-traded, fixed income-like instrument consisting of a subordinated debt security and a share of common stock packaged together to form a tax-efficient delivery mechanism to distribute an issuer's free cash flow to its investors. Investors are paid dividends from the common share component and interest from the subordinated debt. The structure was created for U.S.-based companies to replicate the economic attributes of the Canadian income trust structure - providing steady, high-yield returns to U.S. and Canadian investors in U.S. companies. IDSs do not use the trust structure. Also known as income participating securities (IPS).

<br /><br />Income Stock<br /><br />
A security with a solid record of dividend payments and which offers a dividend yield higher than the average common stock.

<br /><br />Income Trust<br /><br />
Also called income funds. Income trusts are trusts structured to own debt and equity of an underlying entity, which carries on an active business, or has royalty revenues generated by the assets of an active business. By owning securities or assets of an underlying business, an income trust is structured to distribute cash flows, typically on a monthly basis, from those businesses to unit holders in a tax-efficient manner. The trust structure is typically utilized by mature, stable, sustainable, cash-generating businesses that require a limited amount of maintenance capital expenditures. An income trust is an exchange-traded equity investment that is similar to a common share.

There are four categories of income trusts: business trusts; real estate investment trusts (REITs); energy trusts; and power, pipeline, and utility trusts.

<br /><br />Index<br /><br />
A statistical measure of the state of the stock market, based on the performance of stocks. Examples are the S&P/TSX Composite Index and the S&P/TSX Venture Composite Index.

<br /><br />Index Participation Unit (IPU)<br /><br />
See Exchange-Traded Fund (ETF).

<br /><br />Indicated Annual Dividend/Distribution<br /><br />
For an issue with a committed dividend/distribution policy, the indicated annual dividend/distribution (IAD) equals the most recent dividend/distribution multiplied by the payment frequency. For example, if an issuer pays $0.04 quarterly, then the indicated rate is $0.04 X 4 or $0.16. In the case of issuers with no committed policy, the IAD is obtained by adding the dividend/distribution amounts paid in the last 12-month period. Indicated annual dividend/distribution is also referred to as indicated rate.

<br /><br />Indicative Calculated Closing Price (ICCP)<br /><br />
A feature of Market On Close (MOC), a TSX electronic call market facility, the Indicative Calculated Closing Price (ICCP) provides a preliminary indication of what the calculated closing price for a MOC security would be assuming the regular trading session had ended at the time of calculation. The ICCP is calculated without reference to volatility parameters. The ICCP for each MOC security will be broadcast to the trading community at 3:50 PM ET on each trading day, 10 minutes prior to the actual Market On Close execution. A key objective of broadcasting the ICCP is to provide market participants with an early indication of potentially large price movements at the close. The ICCP for all MOC securities will be included in the MOC Imbalance Report that is made available on tmxmoney.com.

<br /><br />Inflation<br /><br />
An overall increase in prices for goods and services, usually measured by the percentage change in the Consumer Price Index.

<br /><br />Initial Public Offering (IPO)<br /><br />
A company's first issue of shares to the general public.

<br /><br />Inside Information<br /><br />
Non-public information pertaining to the business affairs of a corporation that could affect the company's share price should the information be made public.

<br /><br />Insider<br /><br />
All directors and senior officers of a company, and those who are presumed to have access to inside information concerning the company. An insider is also anyone owning more than 10% of the voting shares of a company.

<br /><br />Insider Trading<br /><br />
There are two types of insider trading. The first type occurs when insiders trade in the stock of their company. Insiders must report these transactions to the appropriate securities commissions. The other type of insider trading is when anyone trades securities based on material information that is not public knowledge. This type of insider trading is illegal.

<br /><br />Interlisted<br /><br />
For TSX reporting purposes, interlisted is defined as any issue listed on TSX or TSX Venture Exchange and also listed on a U.S. exchange or NASDAQ.

<br /><br />Intermarket Surveillance Group (ISG)<br /><br />
An international committee comprised of members from 31 exchanges around the world, including every major stock exchange. Membership in the ISG allows all members to share surveillance and investigative information to ensure that each regulator has access to the necessary information to effectively regulate its marketplace. The ISG promotes effective market surveillance among international exchanges and RS involvement helps ensure they are continually in touch with other regulators and part of the development of international best practices.

<br /><br />International Securities Identification Number (ISIN)<br /><br />
The international standard that is used to uniquely identify securities. It consists of a two-character alphabetic country code specified in ISO 6166, followed by a nine-character alphanumeric security identifier (assigned by a national security numbering agency), and then an ISIN check-digit.

<br /><br />Intrinsic Value<br /><br />
The difference between the current market value of the underlying interest and the strike price of an option. In-the-money is a term used when the intrinsic value is positive.

<br /><br />Investment<br /><br />
The purchase or ownership of a security in order to earn income, capital or both. Investments may also include artwork, antiques and real estate.

<br /><br />Investment Advisor<br /><br />
A person employed by an investment dealer who provides investment advice to clients and executes trades on their behalf in securities and other investment products.

<br /><br />Investment Capital<br /><br />
Initial investment capital necessary for starting a business. Investment capital usually consists of inventory, equipment, pre-opening expenses and leaseholds.

<br /><br />Investment Counsellor<br /><br />
A specialist in the investment industry paid by fee to provide advice and research to investors with large accounts.

<br /><br />Investment Dealer<br /><br />
Securities firms that employ investment advisors to work with retail and institutional clients. Investment dealers have underwriting, trading and research departments.

<br /><br />Investment Dealers Association of Canada (IDA)<br /><br />
The national self-regulatory organization of the securities industry. The Association's role is to foster efficient capital markets by encouraging participation in the savings and investment process and by ensuring the integrity of the marketplace.

<br /><br />Investment Fund<br /><br />
A closed-end fund that offers investors the ability to buy a security that represents a portfolio of investments with a specific investment strategy. These products use funds raised through a public offering to invest in a portfolio of securities, which are actively managed to create income streams for investors, typically through a combination of dividends, capital gains, interest payments, and in some cases, income from derivative investment strategies. These funds are not directly related to an operating business. Some examples are: funds of income funds, senior loan funds, mortgage-backed security funds, and commodity funds.

<br /><br />Investor Relations<br /><br />
A corporate function, combining finance, marketing and communications, to provide investors with accurate information about a company's performance and prospects.

<br /><br />IPO Financing<br /><br />
The dollar value of initial public offering (IPO) securities issued in accordance with a TSX or TSX Venture Exchange approved transaction. It is the stated prospectus price multiplied by "the number of securities issued under the IPO plus the over allotment".

<br /><br />Issue<br /><br />
Any of a company's securities or the act of distributing the securities. Issued shares refer to the portion of a company's shares that have been issued for sale. A company does not have to issue the total number of its authorized shares.

<br /><br />Issue Status<br /><br />
The trading status of a class or series of an issuer's listed securities, such that a class or series of listed securities of an issuer may be halted, suspended, or delisted from trading.

<br /><br />Issued and Outstanding Securities<br /><br />
Commonly refers to the situation where the number of issued securities equals the number of outstanding securities. However, under certain corporate statutes in Canada, an issuer may have issued securities and then repurchased those securities without cancelling them. In that case, the securities are issued but are not outstanding. As a result, the number of issued securities does not equal the number of outstanding securities.

<br /><br />Issuer Status<br /><br />
The trading status of a listed or formerly listed issuer. Issuer status types include: delisted, listed, suspended, and trading.



</p><A NAME="glossJ"> J </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Jj</h2><p>

<br /><br />Jitney Order<br /><br />
The execution and clearing of orders by one member of a stock exchange for the account of another member. For example, investment dealer A is a small firm whose volume of business is not sufficient to maintain a trader on the exchange. Instead, investment dealer A gives its orders to investment dealer B, a larger organization which is a member of the exchange, for execution. Investment dealer A pays a reduced percentage of the normal commission.

<br /><br />Junior Corporation<br /><br />
A young company in the early stages of operations and growth.



</p><A NAME="glossK"> K </a><br />

<A NAME="glossL"> L </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Ll</h2><p>

<br /><br />Last Sale Price<br /><br />
For a Market On Close (MOC)-eligible security, the last sale price equals the calculated closing price. If the MOC closing price acceptance parameters are exceeded, it equals the last board lot sale price of the security on the exchange in the regular trading session. 

For any other listed security, the last sale price equals the last board lot sale price of the security on the exchange, in the regular trading session.

<br /><br />Last Trading Day<br /><br />
The last day on which a futures or option contract may be traded.

<br /><br />Liabilities<br /><br />
The debts and obligations of a company or an individual. Current liabilities are debts due and payable within one year. Long-term liabilities are those payable after one year. Liabilities are found on a company's balance sheet or an individual's net worth statement.

<br /><br />Limit Order<br /><br />
An order to buy or sell stock at a specified price. The order can be executed only at the specified price or better. A limit order sets the maximum price the client is willing to pay as a buyer, and the minimum price they are willing to accept as a seller.

<br /><br />Liquidating Order<br /><br />
An order to close out an existing open futures or options contract. A liquidating order involves the sale of a contract that has been purchased or purchase of a contract that has been sold.

<br /><br />Liquidity<br /><br />
This refers to how easily securities can be bought or sold in the market. A security is liquid when there are enough units outstanding for large transactions to occur without a substantial change in price. Liquidity is one of the most important characteristics of a good market. Liquidity also refers to how easily investors can convert their securities into cash and to a corporation's cash position, which is how much the value of the corporation's current assets exceeds current liabilities.

<br /><br />Listed Issuer<br /><br />
An issuer that has at least one class of securities listed on Toronto Stock Exchange or TSX Venture Exchange.

<br /><br />Listed Stock<br /><br />
Shares of an issuer that are traded on a stock exchange. Issuers pay fees to the exchange to be listed and must abide by the rules and regulations set out by the exchange to maintain listing privileges.

<br /><br />Listing Application<br /><br />
The document that an issuer completes and submits to an exchange when it applies to list its shares on the exchange. The issuer must disclose its activities, plans, management and finances in the application.

<br /><br />Long<br /><br />
A term that refers to ownership of securities. For example, if you are long 100 shares of XYZ, this means that you own 100 shares of XYZ company.



</p><A NAME="glossM"> M </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Mm</h2><p>

<br /><br />Margin Account<br /><br />
A client account that uses credit from the investment dealer to buy a security. A client needs to deposit a margin amount with the balance advanced by the investment dealer against collateral such as investments. The investment dealer can make a margin call, which means the client must deposit more money or securities if the value of the account falls below a certain level. If the client does not meet the margin call, the dealer can sell the securities in the margin account at a possible loss to cover the balance owed. The investment dealer also charges the client interest on the money borrowed to buy the securities.

<br /><br />Market<br /><br />
The place where buyers and sellers meet to exchange goods and services. It also represents the actual or potential demand for a product or service.

<br /><br />Market Capitalization<br /><br />
The number of issued and outstanding securities listed for trading for an individual issue multiplied by the board lot trading price. Should a trading price not be available, a bid price, a price on another market, or if applicable, the price for an issue of the same issuer which the first issue is convertible into, may be used. Total market capitalization for a market is obtained by adding together all individual issue market capitalizations (warrants and rights excluded). Escrowed shares are excluded from TSX Venture market capitalization.

<br /><br />Market Maker<br /><br />
A trader employed by a securities firm who is required to maintain reasonable liquidity in securities markets by making firm bids or offers for one or more designated securities up to a specified minimum guaranteed fill. Market makers for the stock of issuers listed on Toronto Stock Exchange are referred to as Registered Traders.

<br /><br />Market On Close (MOC)<br /><br />
A TSX electronic call market facility, which establishes the closing price for certain TSX-listed securities. MOC accepts confidential market orders from before the open and throughout the trading session, maintaining them in time priority. Twenty minutes before the close of the trading session, MOC publicly broadcasts an imbalance of buy and sell MOC market orders and asks for limit MOC orders to offset the imbalance. Ten minutes before the close of the trading session, MOC publicly broadcasts an Indicative Calculated Closing Price (ICCP) that provides market participants with an indication of what the calculated closing price would be assuming the regular trading session had ended at that time (see Indicative Calculated Closing Price for more details). At the close, MOC matches orders, from the MOC and continuous market books, at a calculated closing price (which assures the most matches closest to the last sale price), and allocates the fills according to price and time priority.

<br /><br />Market Order<br /><br />
An order to buy or sell stock immediately at the best current price.

<br /><br />Market-by-Price®<br /><br />
A real-time data feed that puts the order book directly on the customer's screen. This information product shows the committed, tradable volume of the top 5 bids and asks for each Toronto Stock Exchange or TSX Venture Exchange-listed stock.

<br /><br />Material Change<br /><br />
A change in an issuer's affairs that could have a significant effect on the market value of its securities, such as a change in the nature of the business or control of the issuer. Under the principle of continuous disclosure, a listed issuer must issue a news release and report to the applicable self-regulatory organization as soon as a material change occurs.

<br /><br />Member<br /><br />
See Participating Organizations (POs) and Members

<br /><br />Minimum Fill Order<br /><br />
A special term order with a minimum fill condition will only begin to trade if its first fill has the required minimum number of shares. For example, an order to buy 5,000 shares with a minimum volume of 2,000 shares can only trade if 2,000 or more shares become available.

<br /><br />Minimum Guaranteed Fill (MGF) Orders<br /><br />
These orders are guaranteed a complete fill upon entry. A Registered Trader will provide the stock should the book be below the required limit. To be eligible for MGF, an order has to be a tradable client order with a volume less than or equal to the MGF size, which varies from stock to stock.

<br /><br />Minimum Price Fluctuation<br /><br />
The minimum price change or tick on a futures contract.

<br /><br />Mixed Lot or Broken Lot<br /><br />
An order with a volume that combines any number of board lots and an odd lot.

<br /><br />Money Market<br /><br />
Part of the capital market established to buy and sell short-term financial obligations. These include federal government treasury bills, short-term Government of Canada bonds, commercial paper, bankers' acceptances and guaranteed investment certificates. Longer-term securities are also traded in the money market when their term shortens to three years.

<br /><br />Multijurisdictional Disclosure System (MJDS)<br /><br />
A disclosure system that facilitates certain Canadian-U.S. cross-border securities offerings, issuer bids and takeover bids. It is intended to reduce costly duplication of disclosure requirements and other filings when issuers from one country register securities offerings in the other. Under the rules, eligible cross-border offerings are governed by the disclosure requirements of the issuer's home country.

<br /><br />Must-Be-Filled (MBF) Order<br /><br />
Orders placed before the market opens to buy or sell shares of stocks when their options expire. These orders are guaranteed a complete fill at the opening price to offset expiring options. They must be ordered between 4:15 p.m. and 5:00 p.m. on the Thursday before the third Friday of each month.

<br /><br />Mutual Fund<br /><br />
A fund managed by an expert who invests in stocks, bonds, options, money market instruments or other securities. Mutual fund units can be purchased through brokers or, in some cases, directly from the mutual fund company.



</p><A NAME="glossN"> N </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Nn</h2><p>

<br /><br />Naked Writer<br /><br />
A seller of an option contract who does not own a position in the underlying security.

<br /><br />Net Change<br /><br />
The difference between the previous day's closing price and the last traded price.

<br /><br />Net Worth<br /><br />
The difference between a company's or individual's total assets and its total liabilities. Also known as shareholders' equity for a company.

<br /><br />New Issue<br /><br />
A stock or bond issue sold by a company for the first time. Proceeds may be used to retire the company's outstanding securities, or be used for a new plant, equipment or additional working capital. New debt issues are also offered by governments.

<br /><br />New Issuer Listing<br /><br />
Occurs concurrently with the posting of the new issuer's securities for trading. The preconditions for listing include the acceptance by the Exchange that all listing requirements and conditions have been satisfied. The effective listing date is the date when the listed securities open for trading.

<br /><br />New Issuer Listing - Application<br /><br />
An issuer whose application for listing was based on the TSX listing application or the TSX Venture Exchange listing application form. These applications in themselves provide prospectus-level disclosure; however, often the listing application is accompanied by an offering document or a prospectus.

<br /><br />New Issuer Listing - Graduate<br /><br />
An issuer, previously listed on TSX Venture Exchange (including NEX), that applied for and was approved for listing on TSX. The issuer's security would be delisted from TSX Venture Exchange and listed on TSX at the same time, permitting continuous listing of the securities on contiguous exchanges.

<br /><br />New Issuer Listing - IPO (Initial Public Offering)<br /><br />
An IPO (initial public offering) is an issuer's first offering of its securities made to the public in accordance with a prospectus. The offering is often made in conjunction with an issuer's initial application for listing on an exchange.

<br /><br />New Issuer Listing - Plan of Arrangement<br /><br />
An issuer listing as a result of a plan of arrangement. A plan of arrangement is a form of corporate reorganization that must be approved by a court and by the corporation's shareholders or others affected by the proposed arrangement, all as prescribed by corporate legislation. A plan of arrangement can take various forms, including:

- An amalgamation of two or more corporations
- A division of the business of the corporation
- A transfer of all or substantially all of the property of the corporation to another corporation
- An exchange of securities of the corporation held by security holders of the corporation for other securities, money, or other property that is not a takeover bid
- A liquidation or dissolution of the corporation
- A compromise between the corporation and its creditors or holders of its debt
- Any combination of the foregoing.

<br /><br />New Issuer Listing - Spin-Off<br /><br /> 
A reorganization that usually results in a newly listed issuer acquiring a business division or assets as its principal operating asset from another issuer (the reorganized issuer), with security holders of the reorganized issuer holding securities in both issuers, following completion of the reorganization.

<br /><br />New Issuer Listing - Transfer<br /><br />
An issuer previously listed on TSX that applied for and was approved for listing on TSX Venture Exchange. The issuer's security would be delisted from TSX and listed on TSX Venture Exchange at the same time, permitting continuous listing of the securities on contiguous exchanges.

<br /><br />New Listing<br /><br />
A security issue that is newly added to the list of tradable security issues of an exchange. It is accompanied with a new listing date.

<br /><br />NEX<br /><br />
A separate board of TSX Venture Exchange. NEX was launched by TSX Group, effective August 18, 2003, to trade as an open, continuous auction market, on the same TSX Venture trading engine, and to be governed by identical trading rules. NEX provides a trading forum for issuers that have fallen below TSX Venture's continuing listing requirements. They are identified with an extension of "H" added to their stock symbol.

<br /><br />Non-Certificated Issues<br /><br />
An issue that is recorded on the transfer agent's electronic book rather than being held as a physical note.

<br /><br />Non-Client Order<br /><br />
An order from a Participating Organization or an order a firm is executing on behalf of an institution, such as a mutual fund. An "N" denotes a non-client order in the book.

<br /><br />Non-Exempt Issuer<br /><br />
A listed issuer that is subject to special reporting rules.

<br /><br />Non-Net Order<br /><br />
A special-term order when there is a clear understanding between the buying and selling parties that they will settle the trade directly with each other.

<br /><br />Non-Resident Order<br /><br />
A special term order when one or more participants in the trade is not a Canadian resident.

<br /><br />North American Industry Classification System (NAICS)<br /><br />
A system for classifying business establishments. It was developed by the Economic Classification Policy Committee (ECPC) on behalf of the U.S. Office of Management and Budget (OMB), in cooperation with Statistics Canada and Mexico's Instituto Nacional de Estadistica, Geografia e Informatica (INEGI) to provide comparable statistics across the three countries. Launched in 1997, it is the replacement for the 1987 Standard Industrial Classification (SIC) codes.



</p><A NAME="glossO"> O </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Oo</h2><p>

<br /><br />Odd Lot<br /><br />
A number of shares that are less than a board lot, which is the regular trading unit decided upon by the particular stock exchange. An odd lot is also an amount that is less than the par value of one trading unit on the over-the-counter market. For example, if a board lot is 100 shares, an odd lot would be 99 or fewer shares.

<br /><br />Offer<br /><br />
See Ask.

<br /><br />Offset<br /><br />
To liquidate or close out an open futures or option contract.

<br /><br />One-Sided Market<br /><br />
A market that has only buy orders or only sell orders booked for a particular security.

<br /><br />On-Stop (O/S) Order<br /><br />
A special-term order placed with the intention of trading at a later date when the price of the stock reaches the specified stop price. An on-stop order becomes a limit order once a trade at the trigger price has occurred.

<br /><br />Ontario Securities Commission<br /><br />
The government agency that administers the Securities Act (Ontario) and the Commodity Futures Act (Ontario) and regulates securities and listed futures contract transactions in Ontario.

<br /><br />Open Interest<br /><br />
The net open positions of a futures or option contract.

<br /><br />Open Order<br /><br />
An order that remains in the system for more than a day. See Good-Till-Cancelled or Good-Till-Date.

<br /><br />Open-End Investment Fund<br /><br />
An investment fund that continuously offers its securities to investors and stands ready to redeem its securities at all times. Transactions in shares/units of mutual funds are based on their net asset value (NAV), determined at the close of each business day. Examples of an open-end fund are traditional mutual funds and exchange-traded funds (ETFs).

<br /><br />Opening<br /><br />
The market opens at 9:30 a.m. ET each business day.

<br /><br />Option<br /><br />
The right, but not the obligation, to buy or sell certain securities at a specified price within a specified time. A put option gives the holder the right to sell the security, and a call option gives the holder the right to buy the security.

<br /><br />Option Class<br /><br />
All options of the same type, either calls or puts, that have the same underlying security.

<br /><br />Option Cycle<br /><br />
A set pattern of months when a class of options expires.

<br /><br />Option Holder<br /><br />
The buyer of an option contract who has the right to exercise the option during its lifetime.

<br /><br />Option Series<br /><br />
An individual option contract for a given security.

<br /><br />Option Type<br /><br />
A call or put contract.

<br /><br />Option Writer<br /><br />
The seller of an option contract who may be required to deliver (call option) or to purchase (put option) the underlying interest covered by the option, before the contract expires.

<br /><br />Order Number<br /><br />
An eight or nine-digit number assigned to every order entered into the system.

<br /><br />Original Listing/Initial Listing<br /><br />
A listing is designated as an original listing on TSX or initial listing on TSX Venture Exchange, if it satisfies the following three conditions:

- It meets listing requirements.
- It pays applicable listing fees.
- It is described in the exchange bulletin as an original listing by TSX or a new listing by TSX Venture Exchange.
Typical examples of original/initial listings include:

- An initial public offering (IPO)
- Transfer from another exchange
- A new entity created by a spin-off (such as a division, from an existing issuer, becoming its own publicly traded entity)

<br /><br />OTC Foreign Trading<br /><br />
OTC (over-the-counter) foreign trading refers to UMIR Rule 6.4 (e), which permits a trade to be executed off the Exchange, if one or both Participating Organization/Member client accounts are outside of Canada, provided such trades are reported within a specific time frame to the Exchange for public dissemination of the transaction.

<br /><br />Over-The-Counter (OTC) Market<br /><br />
The market maintained by securities dealers for issues not listed on a stock exchange. Almost all bonds and debentures, as well as some stocks, are traded over-the-counter in Canada. An OTC market is also known as an unlisted market.



</p><A NAME="glossP"> P </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Pp</h2><p>

<br /><br />Par Value<br /><br />
A security's nominal face value.

<br /><br />Partial Fill<br /><br />
An order receives a partial fill when it trades only part of its total committed volume.

<br /><br />Participating Organizations (POs) and Members of TSX<br /><br />
Firms that are entitled to trade through the facilities of TSX. However, only POs are also involved in all aspects of the securities business, including underwriting new issues and other financings, and assisting companies in the initial public offering (IPO) process.

<br /><br />Participating Organizations (POs) and Members of TSX Venture Exchange<br /><br />
Firms entitled to trade through the facilities of TSX Venture Exchange. However, only POs of TSX and Members of TSX Venture Exchange are permitted to act as sponsors for listed issuers or issuers proposing to be listed on TSX Venture Exchange.

<br /><br />Penny Stock<br /><br />
Low-priced speculative issues of stock selling at less than $1.00 a share.

<br /><br />Portfolio<br /><br />
Holdings of securities by an individual or institution. A portfolio may include various types of securities representing different companies and industry sectors.

<br /><br />Position Limit<br /><br />
The maximum number of futures or options contracts any individual or group of people acting together may hold at one time.

<br /><br />Power, Pipeline & Utility Trusts<br /><br />
A type of income trust. They are investment vehicles that have underlying businesses that are utilities, power generation companies, or pipeline companies.

<br /><br />Preferred Share<br /><br />
A class of share capital that entitles the owner to a fixed dividend ahead of the issuer's common shares and to a stated dollar value per share in the event of liquidation. It usually does not have voting rights, unless a stated number of dividends have been omitted.

<br /><br />Premium<br /><br />
An option contract's price.

<br /><br />Pre-Opening Session<br /><br />
A session from 7:00 a.m. to 9:30 a.m. (ET) when orders can be entered into the Toronto Stock Exchange's systems. Tradable orders will be queued until after 9:30 a.m. when the market opens.

<br /><br />Price-Earnings (P/E) Ratio<br /><br />
A common stock's last closing market price per share divided by the latest reported 12-month earnings per share. This ratio shows you how many times the actual or anticipated annual earnings a stock is trading at.

<br /><br />Principal Trade<br /><br />
A trade when a Participating Organization is either buying from, or selling to its client.

<br /><br />Priority<br /><br />
If there are several orders competing for a stock at the same price, a priority determines when one of these orders will be filled before any other at this price. Priority is based on the time at which the order is received into the system.

<br /><br />Private Placement<br /><br />
The private offering of a security to a small group of buyers. Resale of the security is limited. See Best Efforts and Bought Deal Underwriting.

<br /><br />Private Placement Financing<br /><br />
The dollar value of privately placed securities issued in accordance with a TSX or TSX Venture Exchange approved transaction. The price is determined in accordance with the policies of the TSX Company Manual or TSX Venture Corporate Finance Manual. The number of securities is the actual number issued. The composition of the financing could take the form of units comprised of multiple securities.

<br /><br />Professional and Equivalent Real-Time Data Subscriptions<br /><br />
The total number of professional accesses to real-time products of TSX and TSX Venture Exchange, as well as non-professional accesses that are priced the same or at a minimal discount to the professional access rate for the same product.

<br /><br />Profit<br /><br />
What is left over for the owners of a business after all expenses have been deducted from revenues. Gross profit is the profit before corporate income taxes. Net profit is the final profit of the business after taxes have been paid.

<br /><br />Prospectus<br /><br />
A legal document describing securities being offered for sale to the public. It must be prepared in accordance with provincial securities commission regulations. Prospectus documents usually disclose pertinent information concerning the company's operations, securities, management and purpose of the offering.

<br /><br />Public Float<br /><br />
The number of issued and outstanding shares of a company, excluding shares held by persons who, individually or in conjunction with other persons, hold 20% or more of the issuer's voting securities.

<br /><br />Push-Out<br /><br />
A push-out occurs during a stock split when new shares are forwarded to the registered holders of old share certificates, without the holders having to surrender the old shares. Both the old and new shares have equal value.

<br /><br />Put Option<br /><br />
A put option is a contract that gives the holder the right to sell a specified number of shares at a stated price within a fixed time period. Put options are purchased by those who think a stock may decline in price.



</p><A NAME="glossQ"> Q </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Qq</h2><p>

<br /><br />Quoted Market Value (QMV)<br /><br />
See Market Capitalization.



</p><A NAME="glossR"> R </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Rr</h2><p>

<br /><br />Rally<br /><br />
A brisk rise in the general price level of the market or price of a stock.

<br /><br />Real Estate Investment Trust (REIT)<br /><br />
Typically, a closed-end investment fund that trades on an exchange and uses the pooled capital of many investors to purchase and manage income properties. Equity REITs primarily own commercial real estate, such as shopping centres, apartments, and industrial buildings. By taking advantage of the trust structure, REITs offer tax advantages (beyond traditional common equity investments) to investors and provide a liquid way to invest in real estate, which otherwise is an illiquid market.

<br /><br />Record Date<br /><br />
See Dividend/Distribution Record Date.

<br /><br />Redeemable Security<br /><br />
A security that carries a condition giving the issuer a right to call in and retire that security at a certain price and for a certain period of time.

<br /><br />Registered Traders<br /><br />
A trader employed by a securities firm who is required to maintain reasonable liquidity in securities markets by making firm bids or offers for one or more designated securities up to a specified minimum guaranteed fill.

<br /><br />Relative Position Report<br /><br />
A TSX report that ranks each Participating Organization's/Member's trading activity relative to the total market and the other POs/Members. It is produced monthly for each TSX Group PO/Member.

<br /><br />Responsible Registered Trader<br /><br />
The Registered Trader assigned by the Selection Committee to act as market maker in a security. Their duties include providing a minimum guaranteed fill, maintaining minimum spread and ensuring orderly trading.

<br /><br />Retractable Security<br /><br />
A security that features an option for the holder to require the issuer to redeem it, subject to specified terms and conditions.

<br /><br />Revenue<br /><br />
The total amount of funds generated by a business.

<br /><br />Reverse Takeover (RTO)/Backdoor Listing<br /><br />
A transaction or series of transactions that includes a securities issuance made by a listed issuer to parties vending securities or other assets into the listed issuer (the new security's holders), such that after completion of the transaction(s), the new security's holders will own more than 50% of the outstanding voting securities of the listed issuer, with an accompanying change of control of the listed issuer. A reverse takeover (RTO)/backdoor listing can be completed through various transactions, including a business or asset acquisition, an amalgamation, a plan of arrangement, or other form of reorganization. The listing of securities of an issuer formed in accordance with an RTO/backdoor listing is treated as a new listing.

<br /><br />Rights<br /><br />
A temporary privilege that lets shareholders purchase additional shares directly from the issuer at a stated price. The price is usually less than the market price of the common shares on the day the rights are issued. The rights are only valid within a given time period.

<br /><br />Risk<br /><br />
The future chance or probability of loss.



</p><A NAME="glossS"> S </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Ss</h2><p>

<br /><br />S&P/TSX 60 Capped Index<br /><br />
Includes all of the constituents of the S&P/TSX 60 Index. The relative weight by market capitalization of any single index constituent is capped at 10%.

<br /><br />S&P/TSX 60 Index<br /><br />
An index of large, liquid, Canadian issuers listed on Toronto Stock Exchange. It is market capitalization weighted, with weights adjusted for available share float, and includes securities of 60 issuers balanced across ten economic sectors. Inclusion in the S&P/TSX Composite is a prerequisite to inclusion in the S&P/TSX 60 Index.

<br /><br />S&P/TSX Capped Composite Index<br /><br />
Includes all of the constituents of the S&P/TSX Composite Index. The relative weight by market capitalization of any single index constituent is capped at 10%.

<br /><br />S&P/TSX Composite Index<br /><br />
Comprises the majority of market capitalization for Canadian-based, Toronto Stock Exchange listed companies. It is the leading benchmark used to measure the price performance of the broad, Canadian, senior equity market. It was formerly known as the TSE 300 Composite Index.

<br /><br />S&P/TSX MidCap Index<br /><br />
An index of mid-sized Canadian issuers that have been included in the S&P/TSX Composite Index but are not members of the S&P/TSX 60 Index. It is market capitalization weighted, with weights adjusted for available share float, and includes securities of 60 issuers balanced across ten economic sectors.

<br /><br />S&P/TSX SmallCap Index<br /><br />
An index of smaller Canadian issuers that are included in the S&P/TSX Composite Index, but have not been added to the S&P/TSX 60 Index or the S&P/TSX MidCap Index. When a new issuer qualifies to be included in the S&P/TSX Composite, it is automatically added to the S&P/TSX SmallCap Index. This index does not have a fixed number of constituents.

<br /><br />S&P/TSX Venture Composite Index<br /><br />
Launched December 10, 2001, it is the leading benchmark used to measure the price performance of the Canadian public venture capital equity market.

<br /><br />Seat<br /><br />
The traditional term for membership on a stock exchange. An investment dealer or brokerage buys a seat on the exchange and one employee is designated as the seat holder. As Toronto Stock Exchange is now demutualized, there are no longer seats on the exchange.

<br /><br />Secondary Offering Financing<br /><br />
The dollar value of secondary offering securities issued in accordance with a TSX or TSX Venture Exchange approved transaction. It is the stated prospectus price multiplied by the "number of securities issued under the offering plus the over allotment".

<br /><br />Securities<br /><br />
Transferable certificates of ownership of investment products such as notes, bonds, stocks, futures contracts and options.

<br /><br />Securities and Exchange Commission (SEC)<br /><br />
The federal regulatory body for interstate securities transactions in the United States.

<br /><br />Securities Commission<br /><br />
Each province has a securities commission or administrator that oversees the provincial securities act. This act is a set of laws and regulations that set down the rules under which securities may be issued or traded in that province.

<br /><br />Securities Industry Association (SIA)<br /><br />
The trade association representing more than 600 securities firms throughout Canada and the United States. Members include banks, brokers, dealers and mutual fund companies.

<br /><br />SEDAR<br /><br />*
The System for Electronic Document Analysis and Retrieval. SEDAR is an electronic filing system that allows listed companies to file prospectuses and continuous disclosure documents. The Canadian Securities Administrators, Canadian Depository for Securities Limited and the filing community developed it, with co-operation from legal firms and stock exchanges.

<br /><br />*SEDAR<br /><br /> is a trademark of the Canadian Securities Administrators.

<br /><br />Seed Stock<br /><br />
The shares or stock sold by a company to provide start-up capital before carrying out an initial public offering (IPO).

<br /><br />Self-Regulatory Organization<br /><br />
An organization recognized by securities administrators as having powers to establish and enforce industry regulations to protect investors and to maintain fair, equitable and ethical practices in the securities industry. Examples include Toronto Stock Exchange and the Investment Dealers Association.

<br /><br />Settlement<br /><br />
The process that follows a transaction when the seller delivers the security to the buyer and the buyer pays the seller for the security.

<br /><br />Settlement Date<br /><br />
The date when a securities buyer must pay for a purchase or a seller must deliver the securities sold. Settlement must be made on or before the third business day following the transaction date in most cases.

<br /><br />Settlement Price<br /><br />
The price used to determine the daily net gains or losses in the value of an open futures or options contract.

<br /><br />Share Certificate<br /><br />
A paper certificate that represents the number of shares an investor owns.

<br /><br />Short Selling<br /><br />
The selling of a security that the seller does not own (naked or uncovered short) or has borrowed (covered short). Short selling is a trading strategy. Short sellers assume the risk that they will be able to buy the stock at a lower price, cover the outstanding short, and realize a profit from the difference.

<br /><br />Special Terms<br /><br />
Orders which must trade under special conditions. For example, a cash order will be settled sooner than the usual three-day settlement period.

<br /><br />Special Trading Session<br /><br />
A session during which trading in a listed security is limited to the execution of transactions at a single price.

<br /><br />Speculator<br /><br />
Someone prepared to accept calculated risks in the marketplace for attractive potential returns.

<br /><br />Split Shares<br /><br />
Capital and preferred shares issued by a split-share corporation. A split-share corporation holds common shares of one or more companies. The corporation then issues two classes of shares - capital shares and preferred shares. The objective is to generate fixed, cumulative, preferential dividends for the holders of preferred shares and to enable the holders of the capital shares to participate in any capital appreciation (or depreciation) in the underlying common shares.

<br /><br />Sponsor, TSX Venture Issuers<br /><br />
A Participating Organization of TSX or a Member of TSX Venture Exchange that is qualified to carry out a due-diligence review of an issuer and prepare a sponsor report, which provides an opinion on the suitability of that issuer for listing or continued listing on TSX Venture Exchange.

<br /><br />Spread<br /><br />
The difference between the bid and the ask prices of a stock.

<br /><br />Standing Committees<br /><br />
Committees formed for the purpose of assisting in decision-making on an ongoing basis.

<br /><br />Stock Dividend/Distribution<br /><br />
A dividend/distribution paid in securities of the same issue or a different issue of the same issuer or another issuer. A stock dividend/distribution can be used as a means to list a new issuer. The issuer or its representative provides the amount, payable date, and record date. The exchange that the issue is listed on sets the ex-dividend/distribution (ex-d) date for entitlement.

<br /><br />Stock Index Futures<br /><br />
Futures contracts which have a stock index as the underlying interest.

<br /><br />Stock List Deletion<br /><br />
A security issue that is removed or delisted from the list of tradable security issues of an exchange. It is usually accompanied with a reason for deletion and the deletion date.

<br /><br />Stock Price Index<br /><br />
A statistical measure of the state of the stock market, based on the performance of certain stocks. Examples include the S&P/TSX Composite Index and the S&P/TSX Venture Composite Index.

<br /><br />Stock Price Index Value (SPIV)<br /><br />
The number that is usually quoted as the value of an index. SPIV is based on the aggregate, float quoted market value of the index constituents and is calculated for all S&P/TSX indices. SPIV is calculated at the end of the trading session for all S&P/TSX indices and throughout the trading session for certain S&P/TSX indices.

<br /><br />Stock Split<br /><br />
A corporate action that increases the number of securities issued and outstanding, without the issuer receiving any consideration for the issue. Approval by security holders is required in many jurisdictions. Each security holder gets more securities, in direct proportion to the amount of securities they own on the record date; thus, their percentage ownership of the issuer does not change. For example, a two-for-one stock split involves the issuance of two new securities for every old security.

<br /><br />Stock Symbol<br /><br />
A one-character to three-character, alphabetic root symbol, which represents an issuer listed on Toronto Stock Exchange or TSX Venture Exchange.

<br /><br />Stock Symbol Extension<br /><br />
The character or characters that may follow the stock symbol to uniquely identify a listed security. It can be a single alphabetic character, two alphabetic characters, or a combination of two plus one characters with a maximum of eight characters for the stock symbol, extension and separator dots in between. For example, BMO.PR.U. Currently, they include:

- A-B class of shares
- DB debenture
- E equity dividend
- H NEX market
- IR installment receipts
- NO, NS, NT notes
- P Capital Pool Company
- PR preferred
- R subscription receipts
- RT rights
- S special U.S. terms
- U, V U.S. funds
- UN units
- W when issued
- WT warrants

<br /><br />Street Certificate<br /><br />
These are certificates registered in the name of a securities firm rather than the owner of the security. This makes the certificate easily transferable to a new owner.

<br /><br />Strike Price<br /><br />
The price the owner of an option can purchase or sell the underlying security. The purchases and sales are also known as calls and puts.

<br /><br />Structured Products<br /><br />
Closed-end or open-end investment funds, which provide innovative and flexible investment products designed to respond to modern investor needs, such as yield enhancement, risk reduction, or asset diversification. Structured products allow investors to buy a single unit/share of a fund that represents an interest in the investment portfolio. Based on the investment strategy, the portfolio can purchase a basket of securities, track an index, or hold a specific type of security or portion of a security. 

The subcategories under the structured products include: investment funds, ETFs, capital trusts, split share corporations, and mutual fund partnerships.

<br /><br />Substitutional Listing<br /><br />
A broad category of transactions that involves one security on the stock list being replaced by another security or securities.

<br /><br />Supplemental Listing<br /><br />
A type of listing transaction, made after an issuer's original listing, that involves the listing and posting for trading of a new issue of securities. Typically, this involves the listing of preferred shares, rights, warrants, or debentures. Supplemental also covers the additional listing of when-issued shares through a secondary offering of an issue that is already listed.

<br /><br />Supplemental Listing Financing<br /><br />
The dollar value of supplemental securities issued in accordance with a TSX or TSX Venture Exchange approved transaction. It is the stated prospectus price multiplied by the "number of securities issued under the supplemental listing plus the over allotment".

<br /><br />Suspended Issue<br /><br />
The status of a listed security of an issuer whose trading privileges have been revoked by the Exchange. All securities of the issuer remain suspended until trading privileges have been reinstated, or the issuer is delisted.

<br /><br />Suspended Issuer<br /><br />
An issuer whose trading privileges for a listed security or securities have been revoked by Toronto Stock Exchange or TSX Venture Exchange. The listed issuer remains suspended until trading privileges have been reinstated, or the listed issuer is delisted.

<br /><br />Symbol Change<br /><br />
A change in a listed issuer's stock symbol, which may be required by the Exchange in the context of an issuer's reorganization or may be made at the request of the issuer. A requested symbol is available for use if it is appropriate for the type of security and the issuer's voting structure.



</p><A NAME="glossT"> T </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Tt</h2><p>

<br /><br />Thin Market<br /><br />
A market that occurs when there are comparatively few bids to buy or offers to sell, or both. The phrase may apply to a single security or to the entire stock market. In a thin market, price fluctuations between transactions are usually larger than when the market is liquid. A thin market in a particular stock may reflect lack of interest in that issue, or a limited supply of the stock.

<br /><br />Tick<br /><br /> 
Slang used for minimum spread. Depending on the stock price it could be a half-cent, one cent or five cents.

<br /><br />Ticker Tape<br /><br />
Each time a stock is bought and sold, it is displayed on an electronic ticker tape. It is a record of current trading activity on an exchange.

<br /><br />Ticket Fee<br /><br />
The administrative fee charged for each trade.

<br /><br />Tier Structure<br /><br />
The TSX Venture Exchange market has two tiers where securities are listed and traded. Tier 1 is for advanced companies with a certain level of net tangible assets and earnings. Tier 2 is for more junior venture companies.

<br /><br />Time<br /><br /> 
Time refers to the time period you would like to see charted from the drop-down menu box labelled "Time". These options give you a choice of intraday pricing data ("Daily", "1-Minute", "5-Minute", "15-Minute" and "Hourly") options. The additional options refer to end-of-day pricing data. This term refers to a TSX Group Historical Performance charting feature.

<br /><br />Time Value<br /><br />
The difference between an option's premium and its intrinsic value.

<br /><br />Timely Disclosure Policy<br /><br />
This policy requires all listed companies to publicly disclose material information in a timely manner.

<br /><br />TL1<br /><br />
Toronto Level 1 (TL1) is a real-time service for listed senior equities that provides trades, quotes, corporate actions and index information from TSX.

<br /><br />TL2<br /><br />
Toronto Level 2 (TL2) is a real-time service for senior equities that shows all of the committed orders and trades for each TSX listed security in real time.

<br /><br />Toronto Stock Exchange<br /><br />
Canada's national stock exchange, which serves the senior equity market.

<br /><br />Total Number of Shares<br /><br />
The total number of issued and outstanding shares for the security.

<br /><br />Total Return Index Value (TRIV)<br /><br />
Similar to the stock price index value (SPIV), except that the TRIV is based on the aggregate, float quoted market value of the index constituents (SPIV) plus their paid dividends/distributions. TRIV is calculated only at the end of the trading session for all S&P/TSX indices.

<br /><br />Trading Halt<br /><br />
A trading halt is imposed by the exchange, usually due to the dissemination of news that might impact a stock's price.

<br /><br />Trading Issue<br /><br />
The status of a listed security of an issuer whose trading privileges are active on the Exchange.

<br /><br />Trading Issuer<br /><br />
An issuer that has at least one class of securities whose trading privileges are active on Toronto Stock Exchange or TSX Venture Exchange.

<br /><br />Trading Number<br /><br />
The unique, 3-digit number assigned to each Participating Organization and Member to identify it for market transparency.

<br /><br />Trading Session<br /><br />
The period during which the Exchange is open for trading.

<br /><br />Trading Symbol<br /><br />
See Stock Symbol.

<br /><br />Trailing Twelve Months Earnings Per Share (TTM EPS)<br /><br />
Trailing, twelve-months earnings per share (TTM EPS), reported by TSX for listed issuers, is an annualized EPS calculation, based on EPS as presented by the issuer, from their latest annual financial statements and the latest subsequent interim financial statements, if any. It includes special items, such as extraordinary items or discontinued operations. It indicates the issuer's annualized earnings for the latest financial reporting period. It is also used to calculate the issuer's price/earnings (P/E) ratio that is reported on tmxmoney.com.

<br /><br />Transaction Date<br /><br />
The date when the purchase or sale of a security takes place.

<br /><br />Transactions<br /><br />
As reported in exchange trading statistics, represents the total number of trades for a specified period.

<br /><br />Transfer Agent<br /><br />
A trust company appointed by a listed company to keep a record of the names, addresses and number of shares held by its shareholders. Frequently, the transfer agent also distributes dividend cheques to the company's shareholders.

<br /><br />Transferable Security<br /><br />
A security that can be transferred from one party holder to another without restrictions, provided that all proper documentation is included.

<br /><br />TSX Industrial Category<br /><br />
Includes all issuers that are not classified as mining or oil and gas.

<br /><br />TSX Industrial, Mines and Oil & Gas Categories (IMO)<br /><br />
The broad classification of issuers into an industrial, mining, or oil and gas category. The classification is done at the review of the original listing application or at a later review of the listed issuer. The classification determines which listing standard is to be applied to the issuer.

<br /><br />TSX Marker for U.S. or Non-U.S. Foreign Incorporated Issuer<br /><br />
A marker used by TSX to classify trading (including interlisted shares) and market capitalization by domestic, U.S., and non-U.S. foreign issuers. The data source is the original listing bulletin, which includes a notation on the laws or jurisdiction the issuer was incorporated under. Non-U.S., foreign issuer data is not broken down by country of incorporation.

<br /><br />TSX Mines Category<br /><br />
Includes:

- Mining issuers that have proven or probable reserves and are either in production or have made a production decision.
- Mineral exploration and development issuers that have a planned work program of exploration or development.

<br /><br />TSX Oil & Gas Category<br /><br />
Includes oil and gas companies that have proven and developed reserves and ongoing operations.

<br /><br />TSX Venture Exchange<br /><br />
Canada's national stock exchange, which serves the public, venture equity market.



</p><A NAME="glossU"> U </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Uu</h2><p>
<br /><br />Underlying Interest<br /><br />
The specific security, commodity, index or financial instrument that an option or futures contract is traded.

<br /><br />Underwriting<br /><br />
The purchase for resale of a new issue of securities by an investment dealer or group of dealers who are also known as underwriters. The formal agreements for these transactions are called underwriting agreements.

<br /><br />Unlisted<br /><br />
A security not listed on a stock exchange, but traded on the over-the-counter market.

<br /><br />Uptick<br /><br />
A stock is said to be on an uptick when the last trade occurred at a higher price than the one before it.



</p><A NAME="glossV"> V </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Vv</h2><p>
<br /><br />Venture Capital<br /><br />
Money raised by companies to finance new ventures.

<br /><br />Venture Company<br /><br />
A classification of TSX Venture Exchange-listed companies that are in the early stages of development and meet the minimum asset, market value and shareholder distribution requirements for Tier 2 listing.

<br /><br />Volatility<br /><br />
A statistical measure of changes in price over a period of time.

<br /><br />Volume<br /><br />
See Debt Volume and Equity Volume.

<br /><br />VWAP<br /><br />
Volume-weighted, average trading price of the listed securities, calculated by dividing the total value by the total volume of securities traded for the relevant period. Where appropriate, TSX may exclude internal crosses and certain other special terms trades from the calculation. This definition is generally used by listed issuers to price their shares.


Equity Value
A transaction for the purpose of executing a trade at a volume-weighted average price of a security traded for a continuous period, on or during a trading day on the Exchange. Marked as a specialty-priced cross, a VWAP cross may be executed outside the quote, will not set the last sale price, and is not subject to interference by other orders on the book. VWAP crosses may be executed in the post open and special trading sessions.



</p><A NAME="glossW"> W </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Ww</h2><p>
<br /><br />Warrant<br /><br />
A security giving the holder the right to purchase securities at a stipulated price within a specified time limit. Exercise of the warrant is solely at the discretion of the holder. Warrants are not exercisable after the expiry date. A warrant is often issued in conjunction with another security as part of a financing. A warrant may be traded as a listed security or it may be held privately.

<br /><br />When-Issued Trading<br /><br />
Occurs when the security has been listed and posted for trading, but the certificate representing the security itself is not yet issued and available for settlement. The exchange bulletin issued on listing of the security indicates if the trading will be done on a when-issued basis. In this case, the issuance of the security is guaranteed and the delay in issuance is often due to factors relating to the printing and distribution of the security. The period for when-issued trading is usually less than one week.

<br /><br />World Federation of Exchanges (WFE)<br /><br />
The World Federation of Exchanges (WFE) is a global trade association for the exchange industry. The membership is comprised of more than 50 regulated exchanges from all regions of the world. Together, these exchanges account for over 95% of world stock market capitalization, and most of its exchange-traded futures, options, listed investment funds, and bonds. TSX is a member of WFE, and is on the Federation's Board of Directors.

<br /><br />Writer<br /><br />
The seller of an option. The writer has an obligation associated with the contract to either purchase or sell a specified number of shares at the strike price on or before expiry.



</p><A NAME="glossX"> X </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Xx</h2><p>
<br /><br />XL1<br /><br />
Index Level 1 is a feed service that provides index and constituent data for the equity S&P/TSX indices. Current day constituent data is broadcast before market open. Complete index and constituent data is delivered at end of day.



</p><A NAME="glossY"> Y </A><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#glosstop">Top of Page</a><br /><h2 class="title">Yy</h2><p>
<br /><br />Yield<br /><br />
This is the measure of the return on an investment and is shown as a percentage. A stock yield is calculated by dividing the annual dividend by the stock's current market price. For example, a stock selling at $50 and with an annual dividend of $5 per share yields 10%. A bond yield is a more complicated calculation, involving annual interest payments, plus amortizing the difference between its current market price and par value over the life of the bond.<br /><br />

<A NAME="glossZ"> Z </a><br />
                            </div>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>

                            <p>&nbsp;</p>
							<p class="links">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->

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
