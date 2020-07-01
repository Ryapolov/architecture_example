<?php

namespace Opt\NewCatalog\RuleException\Domain\Service;

use Bitrix\Main\Type\DateTime;
use Opt\NewCatalog\Common\EventRecorder;
use Opt\NewCatalog\RuleException\Domain\Event\RuleExceptionByBrandBkgWasCreatedEvent;
use Opt\NewCatalog\RuleException\Entity\RuleException;

class RuleExceptionService
{
    use EventRecorder;

    /**
     * @var RuleException
     */
    private $obRuleException;

    public function __construct(RuleException $obRuleException)
    {
        $this->obRuleException = $obRuleException;
    }

    public function deactivate()
    {
        $this->obRuleException->setActive(false);
        $this->obRuleException->setDateModify(new DateTime());
    }

    public function createForBrandBkg(int $brandId, int $bkgId)
    {
        $this->obRuleException->setBrand($brandId);
        $this->obRuleException->setBkg($bkgId);

        $event = new RuleExceptionByBrandBkgWasCreatedEvent($this->obRuleException->getId());
        $this->record($event);

        return $this->create();
    }

    public function createForGoodCode(int $goodCode)
    {
        $this->obRuleException->setItem($goodCode);

        return $this->create();
    }

    private function create(): RuleException
    {
        $this->obRuleException->setActive(true);
        $this->obRuleException->setDateCreate(new DateTime());
        $this->obRuleException->setDateModify(new DateTime());

        return $this->obRuleException;
    }

    /**
     * @return RuleException
     */
    public function getEntity(): RuleException
    {
        return $this->obRuleException;
    }
}