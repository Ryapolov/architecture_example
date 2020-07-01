<?php

namespace Opt\NewCatalog\RuleException\Domain\Exception;

use Throwable;

class DoubleRuleException extends \DomainException
{
    public function __construct()
    {
        parent::__construct('Исключение уже существует', $code = 0, $previous = null);
    }
}