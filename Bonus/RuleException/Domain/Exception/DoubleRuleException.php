<?php

namespace Opt\NewCatalog\RuleException\Domain\Exception;

use Throwable;

class DoubleRuleException extends \DomainException
{
    public function __construct()
    {
        parent::__construct('���������� ��� ����������', $code = 0, $previous = null);
    }
}