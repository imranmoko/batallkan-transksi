<?php
header('Content-Type: application/json');

$config = file_get_contents('config.json');
echo $config;
?>
