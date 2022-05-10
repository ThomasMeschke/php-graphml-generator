<?php

require_once(__DIR__ . '/vendor/autoload.php');

use thomasmeschke\PhpGraphmlGenerator\FileCollector;

$projectRoot = ".";

$files = (new FileCollector())->getFilesRecursivley($projectRoot, ['vendor', '.git']);

print_r($files);
