<?php

/**
 * Check if the current URL matches the given requested URL.
 *
 * @param string $requestedUrl The URL to check against.
 *
 * @return bool True if the current URL matches the given requested URL, false otherwise.
 */
function urlIs(string $requestedUrl): bool
{
    return $_SERVER['REQUEST_URI'] === $requestedUrl;
}

/**
 * Dump the given content and die.
 *
 * A convenient way to quickly debug variables. The given content is
 * dumped to the screen and then the script execution is halted.
 *
 * @param mixed $content Content to dump to the screen.
 */
function dd($content)
{
    echo '<pre>';
    var_dump($content);
    echo '</pre>';
    die();
}