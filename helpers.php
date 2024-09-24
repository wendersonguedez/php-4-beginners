<?php

function urlContains(string $url): bool
{
    return str_contains($_SERVER['REQUEST_URI'], $url);
}