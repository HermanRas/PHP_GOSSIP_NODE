<?php
echo "get use input from cli?  Type stuff and press 'enter' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
echo "\n";
echo "Thank you, your input was processed...\n";
?>