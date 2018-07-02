<?php declare(strict_types=1);

namespace PMG\BingAds\Generator;

use Psr\Log\AbstractLogger;

/**
 * A logger implementation that ignores levels and just spits everything
 * out to a stream.
 *
 * @since   2.0
 */
final class StreamLogger extends AbstractLogger
{
    private $stream;

    public function __construct($stream=null)
    {
        $this->stream = $stream ?: fopen('php://stderr', 'w');
    }

    public function __destruct()
    {
        fclose($this->stream);
    }

    /**
     * {@inheritdoc}
     */
    public function log($level, $message, array $context=[])
    {
        $replace = $this->makeReplacements($context);
        fwrite($this->stream, sprintf(
            '[%s] %s%s',
            $level,
            strtr($message, $replace),
            PHP_EOL
        ));
    }

    private function makeReplacements(array $context)
    {
        $rv = [];
        foreach ($context as $name => $replace) {
            $rv[sprintf('{%s}', $name)] = $replace;
        }

        return $rv;
    }
}
