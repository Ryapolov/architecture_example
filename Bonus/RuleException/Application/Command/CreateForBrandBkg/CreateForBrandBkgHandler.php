<?php

namespace Opt\NewCatalog\RuleException\Application\Command\Create;

use Opt\NewCatalog\RuleException\Domain\Exception\DoubleRuleException;
use Opt\NewCatalog\RuleException\Domain\Repository\RuleExceptionRepositoryInterface;
use Opt\NewCatalog\RuleException\Domain\Service\RuleExceptionService;
use Webmozart\Assert\Assert;

class CreateForBrandBkgHandler
{
    /**
     * @var CreateForBrandBkgCommand
     */
    private $command;
    /**
     * @var RuleExceptionRepositoryInterface
     */
    private $repository;
    /**
     * @var RuleExceptionService
     */
    private $service;

    public function __construct(
        CreateForBrandBkgCommand $command, RuleExceptionRepositoryInterface $repository, RuleExceptionService $service
    ) {

        $this->command = $command;
        $this->repository = $repository;
        $this->service = $service;
    }

    public function handle()
    {
        $this->checkUserPermissions();
        $this->doubleCheck();

        $obRuleException = $this->service->createForBrandBkg($this->command->getBrandId(), $this->command->getBkgId());
        $this->repository->save($obRuleException);
    }

    private function doubleCheck()
    {
        if (!empty($this->repository->findByBrandAndBkg($this->command->getBrandId(), $this->command->getBkgId()))) {
            throw new DoubleRuleException();
        }
    }

    private function checkUserPermissions()
    {
        ///
    }
}