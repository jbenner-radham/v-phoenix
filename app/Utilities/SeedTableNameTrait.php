<?php

namespace App\Utilities;

use Stringy\Stringy;

trait SeedTableNameTrait
{
    private static function _getTableName()
    {
        return Stringy::create(__CLASS__)->replace('TableSeeder', '')
                                         ->toLowerCase();
    }
}
