<?php

namespace Opt\NewCatalog\RuleException\Domain\Repository;

use Opt\NewCatalog\RuleException\Entity\RuleException;

interface RuleExceptionRepositoryInterface
{
    public function findByBrandAndBkg(int $brandId, int $bkgId);

    public function getById(int $id): RuleException;

    public function save(RuleException $obRuleException);
}