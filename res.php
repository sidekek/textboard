<?php
$thread = json_decode(file_get_contents("data/posts.json"));
foreach ($thread->posts as $post)
{
    echo("<div class='post'><span class='post-top'><b>".htmlspecialchars((isset($post->name) ? $post->name : "anon"))."</b> no. ".htmlspecialchars((isset($post->id) ? $post->id : 1337))." <i>".date("Y-m-d H:i:s", (isset($post->time) ? $post->time : 0))."</i></span><br><pre>".htmlspecialchars((isset($post->body) ? $post->body : "PHALLUSES EVERYWHERE"))."</pre></div>");
}
?>