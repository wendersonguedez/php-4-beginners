<?php

function urlContains(string $url): bool
{
    return str_contains($_SERVER['REQUEST_URI'], $url);
}

function dd($content)
{
    echo '<pre>';
    var_dump($content);
    echo '</pre>';
    die;
}