<?php


namespace ItemBuilder;


class VideoItemBuilder  implements Builder
{
    private $videoItem;

    public function createItem()
    {
        $this->videoItem = new VideoItem();
    }

    public function getItem(): Item
    {
        return $this->videoItem;
    }
}
