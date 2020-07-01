<?php

namespace Opt\NewCatalog\RuleException\Application\Command\Create;


use InvalidArgumentException;

class CreateForBrandBkgCommand
{
    private $brandId;
    private $bkgId;
    private $userId;

    public function createFromRequest(array $arRequest)
    {
        return new self($arRequest['BRAND_ID'], $arRequest['BKG_ID']);
    }

    public function __construct(int $brandId, int $bkgId)
    {
        $this->validate($brandId, $bkgId);

        $this->brandId = $brandId;
        $this->bkgId = $bkgId;
    }

    private function validate(int $brandId, int $bkgId)
    {
        \Webmozart\Assert\Assert::greaterThan($brandId, 0, 'ID бренда имеет некорректное значение');
        if ($brandId <= 0) {
            throw new InvalidArgumentException('ID бренда имеет некорректное значение');
        }

        \Webmozart\Assert\Assert::greaterThan($bkgId, 0, 'ID бкг имеет некорректное значение');
    }

    /**
     * @return int
     */
    public function getBrandId(): int
    {
        return $this->brandId;
    }

    /**
     * @return int
     */
    public function getBkgId(): int
    {
        return $this->bkgId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }
}