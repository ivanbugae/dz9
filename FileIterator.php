<?php

namespace Learning\FileReaderIterator;

class FileIterator implements \Iterator
{

    private $path;
    private $line;
    private $file;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function current()
    {
        return fgets($this->file);
    }

    public function next()
    {
        $this->line++;
    }

    public function key()
    {
        return $this->line;
    }

    public function valid()
    {
        return !feof($this->file);
    }

    public function rewind()
    {
        $this->file = fopen($this->path, "r");
        $this->line = 1;
    }
}
