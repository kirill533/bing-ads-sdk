<?php declare(strict_types=1);

namespace PMG\BingAds;

use Psr\EventDispatcher\EventDispatcherInterface;

trait BingServiceDependencies
{
    /**
     * @var RequestHeaders
     */
    private $headers;

    /**
     * @var FaultParser
     */
    private $faults;

    /**
     * @var PsrMessageConverter
     */
    private $messageConverter;

    /**
     * @var EventDispatcherInterface
     */
    private $events;

    /**
     * {@inheritdoc}
     */
    public function setRequestHeaders(RequestHeaders $headers) : void
    {
        $this->headers = $headers;
    }

    /**
     * {@inheritdoc}
     */
    public function setFaultParser(FaultParser $faults) : void
    {
        $this->faults = $faults;
    }

    /**
     * {@inheritdoc}
     */
    public function setMessageConverter(PsrMessageConverter $converter) : void
    {
        $this->messageConverter = $converter;
    }

    /**
     * {@inheritdoc}
     */
    public function setEventDispatcher(EventDispatcherInterface $events) : void
    {
        $this->events = $events;
    }

    protected function getRequestHeaders() : RequestHeaders
    {
        if (!$this->headers) {
            $this->headers = new RequestHeaders();
        }
                
        return $this->headers;
    }

    protected function getFaultParser() : FaultParser
    {
        if (!$this->faults) {
            $this->faults = new FaultParser();
        }

        return $this->faults;
    }

    protected function getMessageConverter() : PsrMessageConverter
    {
        if (!$this->messageConverter) {
            $this->messageConverter = new PsrMessageConverter();
        }

        return $this->messageConverter;
    }

    protected function dispatchEvent(object $event) : object
    {
        if ($this->events instanceof EventDispatcherInterface) {
            return $this->events->dispatch($event);
        }

        return $event;
    }
}
