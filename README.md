# Installation
`composer required kazuto/php-cs-preset --dev`

# Usage
- Create a configuration file `touch .php-cs-fixer.dist.php`
- Add the following content to the file for the minimum setup
```php
<?php

use Kazuto\PhpCsPreset\Preset;

$classLoader = require __DIR__ . '/vendor/autoload.php';
$classLoader->register(true);

// Override rules to your liking
$rules = [
];

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/path/to/your/source/code',
    ]);

return Preset::apply($finder, $rules);
```
  