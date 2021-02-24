<?php


namespace ItemBuilder;


class ItemBuilder implements ItemBuilderInterface
{
    private $item;

    public function setTitle($title)
    {
        // TODO: Implement setTitle() method.
    }

    public function getItem()
    {
        // TODO: Implement getItem() method.
    }

    public function setItem($item, $data)
    {
        switch($item) {
            case 'video':
                $videoItem = new VideoItem();
                $this->item = (new ItemDirector())->setData($data)->build($videoItem);
                break;
            case 'audio' :
                $this->item = '2';
                break;
            case 'book' :
                $this->item = '3';
                break;
            default :
                $this->item = '';
        }
        return $this;
    }


}
