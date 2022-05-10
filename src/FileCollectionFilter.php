<?php 

namespace thomasmeschke\PhpGraphmlGenerator;

class FileCollectionFilter
{
    private array $fileCollection;

    public function __construct(array $fileCollection = [])
    {
        $this->fileCollection = $fileCollection;
    }

    public function filterByExtension(string $extension)
    {
        $extension = trim($extension, ".");
        $matchingFiles = array_filter($this->fileCollection, function($file) use ($extension) {
            return pathinfo($file, PATHINFO_EXTENSION) == $extension;
        });
        return array_values($matchingFiles);
    }
}