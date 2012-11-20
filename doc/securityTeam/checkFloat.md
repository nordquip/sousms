1. Take string $subject as parameter.
2. Match $pattern against the $subject using the following pattern:
(Start of line)(0 or more #s)(0 or 1 ".")(0 or more #s)(End of line)

3. Return 1 if $pattern is matched in $subject

<?php
function checkFloat($subject){
	$pattern = '/^[0-9]\{0,\}[.]\{0,1\}[0-9]\{0,\}$/';
	return preg_match($pattern, $subject);
}
?>

The formatting is a bit weird when viewing this in .md, but if you click edit, you can see how it's supposed to look as a function.

SOURCE: http://www.grymoire.com/Unix/Regular.html