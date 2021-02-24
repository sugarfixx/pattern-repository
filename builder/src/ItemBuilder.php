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

    public function setItem($item)
    {
        switch($item) {
            case 'video':
                $this->item = (new ItemDirector())->setData()->build();
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
