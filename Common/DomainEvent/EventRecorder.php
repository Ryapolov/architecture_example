<?php

namespace Opt\NewCatalog\Common;

trait EventRecorder
{
    /**
     * @var array
     */
    private $events = [];

    public function getRecordedEvents(): array
    {
        $events = $this->events;
        $this->events = [];

        return $events;
    }

    protected function record(Event $event)
    {
        $this->events[] = $event;
    }
}