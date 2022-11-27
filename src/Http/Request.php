<?php

namespace src\Http;

class Request
{
    public function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getPath()
    {
        $path = $_SERVER['REQUEST_METHOD'] ?? '/';

        return str_contains($path , '?') ? explode('?' ,$path)[0] : $path;
    }

}