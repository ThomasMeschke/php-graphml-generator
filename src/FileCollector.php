<?php

namespace thomasmeschke\PhpGraphmlGenerator;

class FileCollector
{
    function getFilesRecursivley(string $dir, array $directoriesToExclude = []): array {
        $files = scandir($dir);
        $results = [];
        foreach ($files as $value) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (is_file($path)) {
                $results[] = $path;
            } else if ($value != "." && $value != "..") {
                if ($value == '.') continue;
                if ($value == '..') continue;
                if(in_array($value, $directoriesToExclude)) continue;
                #$results[] = $path;
                $results = array_merge($results, $this->getFilesRecursivley($path));
            }
        }
        return $results;
    }
}