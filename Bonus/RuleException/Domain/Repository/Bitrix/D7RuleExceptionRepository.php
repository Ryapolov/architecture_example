<?php

namespace Opt\NewCatalog\RuleException\Domain\Repository\Bitrix;

use Opt\NewCatalog\RuleException\Domain\Repository\RuleExceptionRepositoryInterface;
use Opt\NewCatalog\RuleException\Entity\RuleException;

class D7RuleExceptionRepository implements RuleExceptionRepositoryInterface
{

    public function findByBrandAndBkg(int $brandId, int $bkgId)
    {
        // TODO: Implement findByBrandAndBkg() method.
    }

    public function save(RuleException $obRuleException)
    {
        // TODO: Implement save() method.
    }

    public function getById(int $id): RuleException
    {
        return RuleExceptionTable::getById($id)->fetchObject();
    }
}