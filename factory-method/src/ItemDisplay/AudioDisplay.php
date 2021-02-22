<?php


namespace ItemDisplay;


class AudioDisplay implements ItemsInterface
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function makeDisplay() : Item
    {
        $audio = new Item();
        $audio->setTitle($this->title);
        $audio->setImage('Album Cover');
        $audio->setCreator('AudioDisplayClass');
        return $audio;
    }
}
