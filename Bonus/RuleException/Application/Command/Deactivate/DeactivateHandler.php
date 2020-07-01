<?php

namespace Opt\NewCatalog\RuleException\Application\Command;

use Opt\NewCatalog\RuleException\Domain\Repository\RuleExceptionRepositoryInterface;
use Opt\NewCatalog\RuleException\Domain\Service\RuleExceptionService;

class DeactivateHandler
{
    /**
     * @var DeactivateCommand
     */
    private $command;
    /**
     * @var RuleExceptionRepositoryInterface
     */
    private $repository;

    public function __construct(DeactivateCommand $command, RuleExceptionRepositoryInterface $repository)
    {
        $this->command = $command;
        $this->repository = $repository;
    }

    public function handle()
    {
        $service = new RuleExceptionService($this->repository->getById($this->command->getRuleExceptionId()));
        $service->deactivate();

        $this->repository->save($service->getEntity());
    }
}