<?php


namespace ItemDisplay;


class DefaultDisplay implements ItemsInterface
{
    private $title;

    public function __construct($title = "Default")
    {
        $this->title = $title;
    }

    public function makeDisplay() : Item
    {
        $display = new Item();
        $display->setTitle($this->title);
        $display->setImage('Default Image');
        $display->setCreator('DefaultDisplay::class');
        return $display;
    }
}
