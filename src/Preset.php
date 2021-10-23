<?php

declare(strict_types=1);

namespace Kazuto\PhpCsPreset;

use function array_merge;
use PhpCsFixer\Config;
use PhpCsFixer\Finder;

class Preset
{
    public function __invoke(Finder $finder, array $rules = []): Config
    {
        $rules = array_merge(require __DIR__.'/../config/rules.php', $rules);

        return (new Config())
            ->setFinder($finder)
            ->setRules($rules)
            ->setRiskyAllowed(true)
            ->setUsingCache(true);
    }

    public static function apply(Finder $finder, array $rules = []): Config
    {
        return (new self())($finder, $rules);
    }
}
