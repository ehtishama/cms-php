<?php

$title = getdata("title");
$postContent = getdata("post-content");
$category = getdata("category");
$tags = getdata("tags");
$thumbnail = "";





// validate data

$query = "INSERT INTO tutorial (title, image, category, tags, contents)
        VALUES('$title', '$thumbnail', '$category', '$tags', '$postContent');

";

include_once "connection.php";
$result = $connection -> query($query);
if($result)
    echo "Successfully added to the table.";
else echo $connection -> error . "<br> query => " . $query;


print_r($_GET);

function getdata($key)
{
    if(isset($_GET[$key]) && $_GET[$key] != "")
        return $_GET[$key];
    else return "";
}
