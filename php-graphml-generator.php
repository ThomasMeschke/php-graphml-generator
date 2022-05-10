<?php

require_once(__DIR__ . '/vendor/autoload.php');

use thomasmeschke\PhpGraphmlGenerator\FileCollectionFilter;
use thomasmeschke\PhpGraphmlGenerator\FileCollector;

$projectRoot = ".";

$files = (new FileCollector())->getFilesRecursivley($projectRoot, ['vendor', '.git']);
$phpFiles = (new FileCollectionFilter($files))->filterByExtension('php');

print_r($phpFiles);
