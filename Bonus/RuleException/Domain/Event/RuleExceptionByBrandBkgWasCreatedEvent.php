<?php

namespace Opt\NewCatalog\RuleException\Domain\Event;

use Opt\NewCatalog\Common\Event;

class RuleExceptionByBrandBkgWasCreatedEvent implements Event
{
    private $ruleExceptionId;

    public function __construct(int $ruleExceptionId)
    {
        $this->ruleExceptionId = $ruleExceptionId;
    }

    /**
     * @return int
     */
    public function getRuleExceptionId(): int
    {
        return $this->ruleExceptionId;
    }
}