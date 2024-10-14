<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/tests',
    ])
    ->withBootstrapFiles([
        __DIR__ . '/vendor/larastan/larastan/bootstrap.php',
    ])
    ->withPHPStanConfigs([
        __DIR__ . '/phpstan.neon',
    ])
    ->withCache('./storage/rector/cache')
    ->withPhpVersion(PhpVersion::PHP_83)
    ->withTypeCoverageLevel(0);
