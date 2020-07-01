<?php

namespace Opt\NewCatalog\RuleException\Application\Query\Bitrix;

use Opt\NewCatalog\RuleException\Application\Query\CountActiveRuleExceptionQuery;
use Opt\NewCatalog\RuleException\Domain\Repository\Bitrix\RuleExceptionTable;

class D7CountActiveRuleExceptionQuery implements CountActiveRuleExceptionQuery
{

    public function exec(): int
    {
        return (int)RuleExceptionTable::getList(
            [
                'filter' => ['UF_ACTIVE' => 'Y'],
                'select' => [
                    new Bitrix\Main\Entity\ExpressionField('CNT', 'COUNT(DISTINCT %1$s)', ['ID']),
                ],
            ]
        )
            ->fetch()['CNT'];
    }
}