<?php

namespace Opt\NewCatalog\RuleException\Domain\Service;

use Bitrix\Main\Type\DateTime;
use Opt\NewCatalog\RuleException\Entity\RuleException;

class RuleExceptionService
{
    /**
     * @var RuleException
     */
    private $obRuleException;

    public function __construct(RuleException $obRuleException)
    {
        $this->obRuleException = $obRuleException;
    }

    public function createForBrandBkg(int $brandId, int $bkgId)
    {
        $this->obRuleException->setBrand($brandId);
        $this->obRuleException->setBkg($bkgId);

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
}