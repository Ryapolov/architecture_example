<?php

namespace Opt\NewCatalog\RuleException\Domain\Repository\Bitrix;

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;

/**
 * Class RuleExceptionTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> UF_DATE_CREATE datetime optional
 * <li> UF_DATE_MODIFY datetime optional
 * <li> UF_ACTIVE int optional
 * <li> UF_BRAND string optional
 * <li> UF_BKG string optional
 * <li> UF_ITEM int optional
 * </ul>
 *
 * @package Bitrix\Bonus
 **/

class RuleExceptionTable extends Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
        return 'hl_bonus_rule_exception';
    }

    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('RULE_EXCEPTION_ENTITY_ID_FIELD'),
            ),
            'UF_DATE_CREATE' => array(
                'data_type' => 'datetime',
                'title' => Loc::getMessage('RULE_EXCEPTION_ENTITY_UF_DATE_CREATE_FIELD'),
            ),
            'UF_DATE_MODIFY' => array(
                'data_type' => 'datetime',
                'title' => Loc::getMessage('RULE_EXCEPTION_ENTITY_UF_DATE_MODIFY_FIELD'),
            ),
            'UF_ACTIVE' => array(
                'data_type' => 'integer',
                'title' => Loc::getMessage('RULE_EXCEPTION_ENTITY_UF_ACTIVE_FIELD'),
            ),
            'UF_BRAND' => array(
                'data_type' => 'text',
                'title' => Loc::getMessage('RULE_EXCEPTION_ENTITY_UF_BRAND_FIELD'),
            ),
            'UF_BKG' => array(
                'data_type' => 'text',
                'title' => Loc::getMessage('RULE_EXCEPTION_ENTITY_UF_BKG_FIELD'),
            ),
            'UF_ITEM' => array(
                'data_type' => 'integer',
                'title' => Loc::getMessage('RULE_EXCEPTION_ENTITY_UF_ITEM_FIELD'),
            ),
        );
    }
}