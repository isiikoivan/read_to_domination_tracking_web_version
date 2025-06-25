<?php
require_once 'db/DatabaseConnection.php';

$db = new DatabaseConnection();
$db->connection();

$verse = $db->getVerseById(1);
echo "<pre>";
print_r($verse);
echo "</pre>";
