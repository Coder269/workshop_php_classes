<?php

class Book
{
    private string $title;
    private string $author;
    private int $pageCount;

    public function __construct(string $_title, string $_author, int $_pageCount)
    {
        $this->title = $_title;
        $this->author = $_author;
        $this->pageCount = $_pageCount;
    }

    public function getSummary(): string
    {
        return "Le livre {$this->title} a été écrit par {$this->author} et contient {$this->pageCount} pages.";
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        if (strlen($title) <= 50)
            $this->title = $title;
        else echo "Le titre ne doit pas faire plus de 50 caractères!" . PHP_EOL;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getPageCount(): int
    {
        return $this->pageCount;
    }

    public function setPageCount(int $pageCount): void
    {
        $this->pageCount = $pageCount;
    }


}