<?php

$tockenSHA = hash('sha256','abc@m.com');
$tockenB2H = bin2hex($tockenSHA);

echo strlen($tockenSHA);
echo "<br>".$tockenSHA."<br>".$tockenB2H;

?>