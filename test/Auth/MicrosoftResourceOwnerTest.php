<?php declare(strict_types=1);

namespace PMG\BingAds\Auth;

class MicrosoftResourceOwnerTest extends \PMG\BingAds\TestCase
{
    public function testGetIdReturnsNullWhenNoIdIsSet()
    {
        $o = self::make([]);

        $this->assertNull($o->getId());
    }

    public function testGetIdReturnsIdValueWhenSetInArray()
    {
        $o = self::make(['id' => 'test123']);

        $this->assertEquals('test123', $o->getId());
    }

    public function testGetNameReturnsNullWhenNameIsNotSet()
    {
        $o = self::make([]);

        $this->assertNull($o->getName());
    }

    public function testGetNameReturnsNameValueWhenSet()
    {
        $o = self::make(['name' => 'Rob Tester']);

        $this->assertEquals('Rob Tester', $o->getName());
    }

    public function testGetEmailReturnsNullWhenEmailsIsNotSet()
    {
        $o = self::make([]);

        $this->assertNull($o->getEmail());
    }

    public function testGetEmailReturnsNullWhenPreferredEmailIsNotSet()
    {
        $o = self::make(['emails' => ['other' => 'test@pmg.com']]);

        $this->assertNull($o->getEmail());
    }

    public function testGetEmailReturnsPreferredEmailWhenSet()
    {
        $o = self::make(['emails' => ['preferred' => 'test@pmg.com']]);

        $this->assertEquals('test@pmg.com', $o->getEmail());
    }

    public static function strings()
    {
        return [
            [['name' => 'Rob Tester', 'emails' => ['preferred' => 'test@pmg.com']], 'Rob Tester <test@pmg.com>'],
            [['emails' => ['preferred' => 'test@pmg.com']], 'test@pmg.com'],
            [['name' => 'Rob Tester'], 'Rob Tester'],
            [['id' => 'test123'], 'test123'],
        ];
    }

    /**
     * @dataProvider strings
     */
    public function testToStringReturnsTheExpectedValueBasedOnWhatsProvided(array $attr, string $expected)
    {
        $o = self::make($attr);

        $this->assertEquals($expected, (string) $o);
    }

    public static function make(array $in) : MicrosoftResourceOwner
    {
        return new MicrosoftResourceOwner($in);
    }
}
