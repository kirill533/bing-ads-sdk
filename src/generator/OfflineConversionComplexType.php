<?php declare(strict_types=1);

namespace PMG\BingAds\Generator;

use Wsdl2PhpGenerator\ComplexType;

class OfflineConversionComplexType extends ComplexType
{
    /**
     * {@inheritdoc}
     * Special handling for the conversion time field. See:
     * https://docs.microsoft.com/en-us/advertising/campaign-management-service/offlineconversion?view=bingads-12
     *
     * Bing requires conversion time in UTC, so this converts to UTC and then
     * formats it with the same format as the examples in the docs.
     */
    protected function buildDateFormatCode(string $variableName, string $memberName) : string
    {
        if ('ConversionTime' !== $memberName) {
            return parent::buildDateFormatCode($variableName, $memberName);
        }

        return sprintf('%s->setTimezone(new \DateTimeZone("UTC"))->format("Y-m-d\TH:i:s.u\Z")', $variableName);
    }
}
