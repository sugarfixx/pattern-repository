<?php


namespace ItemDisplay;


class AudioDisplayCreator extends ItemCreator
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function createItem(): ItemsInterface
    {
        return new AudioDisplay($this->title);
    }
}
