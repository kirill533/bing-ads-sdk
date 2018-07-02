<?php declare(strict_types=1);

namespace PMG\BingAds;

use PMG\BingAds\Exception\BadMethodCallException;

class GenericErrorObject
{
    private $props = [];

    public function __construct(array $props=[])
    {
        $this->props = array_change_key_case($props, CASE_LOWER);
    }

    public function __call($method, $args)
    {
        $type = strtolower(substr($method, 0, 3));
        if (!in_array($type, ['set', 'get'])) {
            throw new BadMethodCallException(sprintf('undefined method: %s', $method));
        }

        $prop = strtolower(substr($method, 3));
        if ('get' === $type) {
            return $this->props[$prop] ?? null;
        }

        $this->props[$prop] = $args[0] ?? null;
    }
}
