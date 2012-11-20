<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/webServiceCaller.include.php';
	include("login.include.php"); //requires login to access, Since what I want will be on most pages I assume login.include will have to be on those pages.

	function infoDisplay ()
	{
		echo "Hello, $username. Your current cash amount is $currentcash.";
	}
	
?>

The Java Script to 

The line going between buttons and banner:

<?php  infoDisplay();  ?>

Stuff I want to add to webServiceCaller.include.php that I don't want to add for fear of messing it up:
	To $behaviors = array ( "currentCash" => "Current Cash",)
	To DATA ITEM 'DECLARATIONS'
		$currentcash = (isset($_POST["currentcash"]) ? $_POST["currentcash"] : "");
	To the $transtype
		$currentcash
		
		
		
After looking on the internet I have not found a way to time this so it redisplays every few minutes without using cron
which I do not understand. I am open to help and suggestions.