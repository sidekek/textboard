<?php
class post
{
    public $id = 0;
    public $body = "";
    public $name = "";
    function __construct($id_, $body_, $name_)
    {
        $this->id = $id_;
        $this->body = $body_;
        $this->name = $name_;
    }
}
class thread
{
    public $posts = [];
}
?>