<?php

function simplifyPath($path)
{
    $parts = explode("/", $path);
    $parts = array_filter($parts, function ($item) {
        return $item && $item !== ".";
    });

    $path = new SplStack();
    foreach ($parts as $part) {
        if ($part === "..") {
            if (!$path->isEmpty()) {
                $path->pop();
            }
        } else {
            $path->push($part);
        }
    }

    $str = "";
    while (!$path->isEmpty()) {
        $str = "/" . $path->pop() . "{$str}";
    }

    if (empty($str)) {
        $str = "/";
    }

    return $str;
}