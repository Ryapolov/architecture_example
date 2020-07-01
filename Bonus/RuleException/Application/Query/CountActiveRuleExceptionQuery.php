<?php

namespace Opt\NewCatalog\RuleException\Application\Query;

interface CountActiveRuleExceptionQuery
{
    public function exec(): int;
}