<?php

class Book
{
    private static $lastId = 1;
    private $id;
    private $Title;
    private $Authors;
    private $Publisher;
    private $Year;

    public function __construct($Title = "", $Authors = array(), $Publisher = "", $Year = 0)
    {
        $this->id = self::$lastId++;
        $this->setTitle($Title)->setAuthors($Authors)->setPublisher($Publisher)->setYear($Year);
    }

    public function setTitle($Title): Book
    {
        $this->Title = $Title;

        return $this;
    }

    public function setAuthors($Authors): Book
    {
        $this->Authors = $Authors;

        return $this;
    }

    public function setPublisher($Publisher): Book
    {
        $this->Publisher = $Publisher;

        return $this;
    }

    public function setYear($Year): Book
    {
        $this->Year = $Year;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->Title;
    }

    public function getAuthors(): array
    {
        return $this->Authors;
    }

    public function getPublisher(): string
    {
        return $this->Publisher;
    }

    public function getYear(): int
    {
        return $this->Year;
    }

    public function __toString(): string
    {
        $AuthorsArray = $this->Authors;
        $Authors = "";
        for ($i = 0; $i < count($AuthorsArray); $i++) {
            $Authors .= "Автор " . ($i + 1) . ": " . $AuthorsArray[$i] . PHP_EOL;
        }
        return "Id: $this->id" . PHP_EOL . "Название: $this->Title" . PHP_EOL . $Authors . "Издательство: $this->Publisher" . PHP_EOL . "Год: $this->Year" . PHP_EOL;
    }
}
