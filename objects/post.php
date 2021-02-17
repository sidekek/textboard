<?php
class post
{
    public $id = 0;
    public $time = 0;
    public $body = "";
    public $name = "";
    function __construct($id_, $body_, $name_, $time_)
    {
        $this->id = $id_;
        $this->body = $body_;
        $this->name = $name_;
        $this->time = $time_;
    }
}
class thread
{
    public $posts = [];
}
?>