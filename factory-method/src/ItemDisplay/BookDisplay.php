<?php


namespace ItemDisplay;


class BookDisplay implements ItemsInterface
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function makeDisplay() : Item
    {
        $book = new Item();
        $book->setTitle($this->title);
        $book->setImage('Book Cover');
        $book->setCreator('BookDisplay::class');
        return $book;
    }
}
