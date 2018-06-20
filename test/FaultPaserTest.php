<?php declare(strict_types=1);

namespace PMG\BingAds;

use SoapFault;
use PMG\BingAds\Exception\ApiException;
use PMG\BingAds\Exception\SoapFault as LibSoapFault;
use PMG\BingAds\CampaignManagement\AdApiFault;
use PMG\BingAds\CampaignManagement\AdApiError;

class FaultParserTest extends TestCase
{
    private $faults;

    private $classmap = [
        'AdApiFaultDetail' => AdApiFault::class,
        'AdApiError' => AdApiError::class,
    ];

    public function testSoapFaultWithoutDetailDoesNotParse()
    {
        $result = $this->faults->toException(new SoapFault('code', 'err'), $this->classmap);

        $this->assertInstanceOf(LibSoapFault::class, $result);
    }

    public function testSoapFaultWithEmptyDetailDoesNotParse()
    {
        $fault = new SoapFault('code', 'err', null, '');

        $result = $this->faults->toException($fault, $this->classmap);

        $this->assertInstanceOf(LibSoapFault::class, $result);
    }

    public function testFaultWithUnRecognizedTypeInDetailDoesNotParse()
    {
        $fault = self::makeFaultWithDetail('UnrecognizedType', [
            'Errors' => 'yep',
        ]);

        $result = $this->faults->toException($fault, $this->classmap);


        $this->assertInstanceOf(LibSoapFault::class, $result);
    }

    public function testFaultWithRecognizedTypeParsesIntoTypeAndSetsErrors()
    {
        $fault = self::makeFaultWithDetail('AdApiFaultDetail', [
            'TrackingId' => '123',
            'Errors' => [
                'AdApiError' => [
                    'Code' => 123,
                    'ErrorCode' => 234,
                    'Detail' => '$#!7 broke',
                    'Message' => 'oops',
                ],
            ],
        ]);

        $result = $this->faults->toException($fault, $this->classmap);

        $this->assertInstanceOf(AdApiFault::class, $result);
        $err = new AdApiError();
        $err->setCode(123);
        $err->setErrorCode(234);
        $err->setDetail('$#!7 broke');
        $err->setMessage('oops');
        $this->assertEquals([$err], $result->getErrors());
    }

    public function testFaultWithUnrecognizedErrorClassUsesGenericError()
    {
        $fault = self::makeFaultWithDetail('AdApiFaultDetail', [
            'TrackingId' => '123',
            'Errors' => [
                'NotRecognized' => [
                    'Code' => 123,
                    'ErrorCode' => 234,
                    'Detail' => '$#!7 broke',
                    'Message' => 'oops',
                ],
            ],
        ]);

        $result = $this->faults->toException($fault, $this->classmap);

        $this->assertInstanceOf(AdApiFault::class, $result);
        $err = new GenericErrorObject([
            'Code' => 123,
            'ErrorCode' => 234,
            'Detail' => '$#!7 broke',
            'Message' => 'oops',
        ]);
        $this->assertEquals([$err], $result->getErrors());
    }

    public static function faultProps()
    {
        return [
            ['faultcode'],
            ['faultstring'],
            ['faultactor'],
            ['detail'],
        ];
    }

    /**
     * @dataProvider faultProps
     */
    public function testLibSoapFaultProxiesToPreviousExceptionForFaultProps(string $prop)
    {
        $wrapme = new SoapFault(
            'faultcode',
            'faultstring',
            'faultactor',
            'detail'
        );
        $fault = LibSoapFault::wrap($wrapme);

        $this->assertTrue(isset($fault->$prop));
        $this->assertEquals($prop, $fault->$prop);
    }

    protected function setUp()
    {
        $this->faults = new FaultParser();
    }

    private static function makeType(string $typename, array $values) : object
    {
        return json_decode(json_encode([
            $typename => $values,
        ]));
    }

    private static function makeFaultWithDetail(string $typename, array $values)
    {
        $fault = new SoapFault('code', 'err');
        $fault->detail = self::makeType($typename, $values);

        return $fault;
    }
}
