<?php
/*
php test file -- connects to xampp db names sousms, user root, pw ""
*/
include "DbConn.class.php";
try {
	// connect to the database -- needed by the classes
	// that implement the behaviors
	$conn = new DbConn("localhost","sousms","root","");

	} catch (Exception $e) {
	// add another element
	echo "Exception: " . $conn->getDebug() . "<br />". "\n";
}
//	echo "No Exception: " . $conn->getDebug() . "<br />". "\n";

$myConn = $conn->getConn();

$dtb = new DateTime(null, new DateTimeZone("America/Los_Angeles"));
$dte = new DateTime(null, new DateTimeZone("America/Los_Angeles"));
$dte->modify("+10 minutes");

echo "\$dte->format() " . $dte->format("Y-m-d H:i:s") . "\n";

$stmt = $myConn->prepare("insert Login values (1, md5('password'), ?, ?)");
$stmt->execute(array($dtb->format("Y-m-d H:i:s"), $dte->format("Y-m-d H:i:s")));
?>
