<?php
$thread = json_decode(file_get_contents("data/posts.json"));
foreach ($thread->posts as $post)
{
    echo("<div class='post'><span class='post-top'><b>".htmlspecialchars($post->name)."</b> no. ".htmlspecialchars($post->id)." <i>".date("c", $post->time)."</i></span><br><p>".htmlspecialchars($post->body)."</p></div>");
}
?>