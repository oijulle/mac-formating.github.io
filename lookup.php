<?php
header('Content-Type: text/plain');
$mac = $_GET['mac'] ?? '';
if (!$mac) {
    echo 'No MAC provided';
    exit;
}
$mac = preg_replace('/[^A-Fa-f0-9]/', '', $mac);
echo file_get_contents("https://api.macvendors.com/" . $mac);
?>
