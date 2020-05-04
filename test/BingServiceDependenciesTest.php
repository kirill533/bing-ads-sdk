<?php declare(strict_types=1);

namespace PMG\BingAds;

use Psr\EventDispatcher\EventDispatcherInterface;

class BingServiceDependenciesTest extends TestCase
{
    use BingServiceDependencies;

    public function testDispatchEventDoesNothingWhenEventsIsNotADispatcher()
    {
        $event = new class {};
        $this->events = new class {};

        $resultEvent = $this->dispatchEvent($event);

        $this->assertSame($event, $resultEvent);
    }

    public function testDispatchEventUsesTheEventDispatcherWhenSet()
    {
        $event = new class {};
        $returnEvent = clone $event;
        $dispatcher = $this->createMock(EventDispatcherInterface::class);
        $dispatcher->expects($this->once())
            ->method('dispatch')
            ->with($this->identicalTo($event))
            ->willReturn($returnEvent);
        $this->setEventDispatcher($dispatcher);

        $resultEvent = $this->dispatchEvent($event);

        $this->assertSame($returnEvent, $resultEvent);
    }
}
