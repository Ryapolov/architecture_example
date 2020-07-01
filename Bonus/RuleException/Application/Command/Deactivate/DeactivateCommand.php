<?php

namespace Opt\NewCatalog\RuleException\Application\Command;

use Webmozart\Assert\Assert;

class DeactivateCommand
{
    private $userId;
    private $ruleExceptionId;

    public function __construct(int $userId, int $ruleExceptionId)
    {
        $this->validate($userId, $ruleExceptionId);

        $this->userId = $userId;
        $this->ruleExceptionId = $ruleExceptionId;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return int
     */
    public function getRuleExceptionId(): int
    {
        return $this->ruleExceptionId;
    }

    private function validate(int $userId, int $ruleExceptionId)
    {
        Assert::greaterThan($userId, 0, '«десь мог бы быть ваш текст');
        Assert::greaterThan($ruleExceptionId, 0, '«десь мог бы быть ваш текст');
    }
}