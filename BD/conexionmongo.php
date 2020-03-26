<?php
$client = new MongoDB\Client(
    'mongodb+srv://ozamora:PVNcPaIVqKsEQCKD@ingsof-w6zh2.mongodb.net/test?retryWrites=true&w=majority');

$db = $client->test;
echo $db;
?>
