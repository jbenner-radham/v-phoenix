<?php

namespace App\Utilities;

use RuntimeException;
use Symfony\Component\Yaml\Yaml as SymfonyYaml;

class Yaml extends SymfonyYaml
{
    /**
     * @param  $filename string
     * @return string[]
     */
    public static function parseFile($filename)
    {
        if (!file_exists($filename) || !is_readable($filename)) {
            throw new RuntimeException('YAML file is inaccessible.');
        }

        return self::parse(file_get_contents($filename));
    }
}
