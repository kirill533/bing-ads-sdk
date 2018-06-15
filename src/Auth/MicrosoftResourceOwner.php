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
        return $this->data['id'] ?? null;
    }

    public function getEmail() : ?string
    {
        return $this->data['emails']['preferred'] ?? null;
    }

    public function getName() : ?string
    {
        return $this->data['name'] ?? null;
    }

    public function toArray() : array
    {
        return $this->data;
    }

    public function __toString() : string
    {
        $id = $this->getId();
        $email = $this->getEmail();
        $name = $this->getName();

        if ($name && $email) {
            return sprintf('%s <%s>', $name, $email);
        }

        if ($email) {
            return $email;
        }

        if ($name) {
            return $name;
        }

        return (string) $id;
    }
}
