<?php

// In case PHP CS Fixer fails without any explanation, there might be syntax errors in some files, try running
// ./vendor/bin/php-cs-fixer --allow-risky=yes --using-cache=no --verbose --diff fix --dry-run

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
        'modernize_types_casting' => true,
        'native_function_invocation' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
    ])
    ->setFinder($finder);
