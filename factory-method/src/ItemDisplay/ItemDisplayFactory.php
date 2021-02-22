<?php


namespace ItemDisplay;


class ItemDisplayFactory
{
    public function makeDisplay($type, $title)
    {
        switch (strtolower($type)) {
            case "book" :
                $creator = new BookDisplayCreator($title);
                break;
            case "video" :
                $creator = new VideoDisplayCreator($title);
                break;
            case "audio" :
                $creator = new AudioDisplayCreator($title);
                break;
            default :
                $creator = new DefaultDisplayCreator($title);
        }

        return $this->client($creator);
    }

    public function client(ItemCreator $creator)
    {
        return $creator->makeDisplay();
    }
}
