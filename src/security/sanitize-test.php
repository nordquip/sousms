<?php

print("sanitize-test.php");

<form action="sanitize.php" method="post">
UserName: <input type="text" name="username">
Integer: <input type="text" name="int">
Password: <input type="text" name="password">
Email: <input type="text" name="email">
Float: <input type="text" name="float">
<input type="submit">
</form>

print (" *test for sql injection, xss, xsrf, etc.. ");
?>