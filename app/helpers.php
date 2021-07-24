<?php

if (!function_exists('smallpure')) {
    function smallpure(...$params): void
    {
        foreach ($params as $p) {
            dump($p);
        }
    }
}
