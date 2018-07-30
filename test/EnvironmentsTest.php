<?php declare(strict_types=1);

namespace PMG\BingAds;

use PMG\BingAds\Exception\InvalidApiEnvironment;

class EnvironmentsTest extends TestCase
{
    public function testValidEnvironmentReturnsFromValidate()
    {
        $env = Environments::validate(Environments::PROD);

        $this->assertSame(Environments::PROD, $env);
    }

    public function testInvalidEnvironmntThrowInValidate()
    {
        $this->expectException(InvalidApiEnvironment::class);
        Environments::validate('nope');
    }
}
