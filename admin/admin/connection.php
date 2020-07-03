<?php
$connection = new mysqli("localhost", "root", "", "photoshop_tutorials");

if($connection -> connect_error)
{
    print("could not connect to the database." . $connection -> connect_error);
    exit;
}


