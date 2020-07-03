<?php

require_once "connection.php";
$result = $connection->query("SELECT * FROM category");

$categories = [];
if($result)
while($row = $result -> fetch_assoc())
{
    $categories[] = $row;
}


