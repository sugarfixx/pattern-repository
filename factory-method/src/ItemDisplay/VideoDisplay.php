<?php


namespace ItemDisplay;


class VideoDisplay implements ItemsInterface
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function makeDisplay() : Item
    {
        $video = new Item();
        $video->setTitle($this->title);
        $video->setImage('Video Poster');
        $video->setCreator('VideoDisplay::class');
        return $video;
    }
}
