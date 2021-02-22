<?php


namespace ItemDisplay;


class BookDisplayCreator extends ItemCreator
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function createItem(): ItemsInterface
    {
        return new BookDisplay($this->title);
    }
}
