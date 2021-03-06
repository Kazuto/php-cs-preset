<?php

use Kazuto\PhpCsPreset\Preset;

$classLoader = require __DIR__ . '/vendor/autoload.php';
$classLoader->register(true);

$finder = PhpCsFixer\Finder::create()
    ->in(getcwd())
    ->name(['*.php','.php_cs.dist'])
    ->notPath('vendor');

return Preset::apply($finder);