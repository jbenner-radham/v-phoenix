<?php

namespace App\Utilities;

use Stringy\Stringy;

trait SeedTableTrait
{
    /**
     * @return string[]
     */
    protected static function _getSeedData()
    {
        return Yaml::parseFile(__DIR__ . '/data/' . self::_getTableName() . '.yaml');
    }

    /**
     * @return Stringy
     */
    protected static function _getTableName()
    {
        return Stringy::create(__CLASS__)->replace('TableSeeder', '')
                                         ->underscored()
                                         ->toLowerCase();
    }
}
