<?php namespace app\core;

class Request 
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        var_dump($position);
        die();
    }

    public function getMethod()
    {

    }
}