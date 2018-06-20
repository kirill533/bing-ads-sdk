<?php

$loader = require __DIR__.'/../vendor/autoload.php';

function getEnvOrError(string $name)
{
    if (false === $val = getenv($name)) {
        throw new RuntimeException(sprintf('%s not in the environment', $name));
    }

    return $val;
}
