<?php
$link = mysql_connect('localhost', 'wordpress_user2', '123456');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
