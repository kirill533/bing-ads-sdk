<?php declare(strict_types=1);

namespace PMG\BingAds\Auth;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

final class MicrosoftResourceOwner implements ResourceOwnerInterface
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getId() : ?string
    {
        return $this->data['id'] ?: null;
    }

    public function toArray() : array
    {
        return $this->data;
    }
}
