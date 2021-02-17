<?php
if ((!isset($_POST["name"])) || (!isset($_POST["body"])))
{
    echo("u fail");
    exit();
}
include_once("objects/post.php");
$general = json_decode(file_get_contents("data/general.json"));

$general->number++;

$thread = json_decode(file_get_contents("data/posts.json"));
array_push($thread->posts, new post($general->number, substr($_POST["body"], 0, 1500), substr($_POST["name"], 0, 25), time()));
file_put_contents("data/posts.json", json_encode($thread));

file_put_contents("data/general.json", json_encode($general));

echo("POSTED DAT MCSHIZZLE");
exit();
?>