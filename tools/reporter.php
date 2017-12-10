#! /usr/bin/env php
<?php
/**
 * Copyright (c) 2017 McGraw-Hill Education <http://mheducation.com>.
 *
 * All rights reserved, unless this code has already been open-sourced elsewhere.
 */
declare(strict_types=1);

$files = [
    \dirname(__DIR__) . '/reports/phpcs-src.xml',
    \dirname(__DIR__) . '/reports/phpcs-tests.xml',
];

foreach ($files as $file) {
    $xml = \simplexml_load_file($file);

    foreach ($xml->file as $file) {
        echo \str_replace(\dirname(__DIR__), '', (string) $file->attributes()->name) . PHP_EOL;

        foreach ($file->error as $error) {
            echo \sprintf(
                '- ERROR [line %s, column %s]: %s (%s)',
                (int) $error->attributes()->line,
                (int) $error->attributes()->column,
                (string) $error,
                (string) $error->attributes()->source
            ) . PHP_EOL;
        }

        foreach ($file->warning as $warning) {
            echo \sprintf(
                '- WARNING [line %s, column %s]: %s (%s)',
                (int) $warning->attributes()->line,
                (int) $warning->attributes()->column,
                (string) $warning,
                (string) $warning->attributes()->source
            ) . PHP_EOL;
        }

        echo PHP_EOL;
    }
}