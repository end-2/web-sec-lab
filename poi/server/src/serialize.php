<?php
include 'UserData.php';

echo urlencode(serialize(new UserData('Alice', 'alice@example.com'))) . "\n";

?>
