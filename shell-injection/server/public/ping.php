<?php
if (isset($_GET['addr'])) {
    echo exec("ping -c 4 " .$_GET["addr"]) . "\n";
} else {
    echo "Enter a command to run!" . "\n";
}
?>
