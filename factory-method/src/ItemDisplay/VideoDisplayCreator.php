<?php


namespace ItemDisplay;


class VideoDisplayCreator extends ItemCreator
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function createItem(): ItemsInterface
    {
        return new VideoDisplay($this->title);
    }
}
