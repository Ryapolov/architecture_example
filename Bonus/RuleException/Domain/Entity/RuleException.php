<?php

namespace Opt\NewCatalog\RuleException\Entity;

use Bitrix\Main\Type\DateTime;

interface RuleException
{
    public function getId(): int;
    public function getDateCreate(): DateTime;
    public function getDateModify(): DateTime;
    public function isActive(): bool;
    public function getBrand(): int;
    public function getBkg(): int;
    public function getItem(): int;

    public function setDateCreate(DateTime $dateTime);
    public function setDateModify(DateTime $dateTime);
    public function setActive(bool $value);
    public function setBrand(int $brand);
    public function setBkg(int $bkg);
    public function setItem(int $goodCode);
}