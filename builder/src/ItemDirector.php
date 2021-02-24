<?php


namespace ItemBuilder;

use ItemBuilder\Builder;

class ItemDirector
{
    private $data;

    public function __construct($data = null)
    {
        if ($data) {
            $this->setData($data);
        }
    }

    public function build(Builder $builder) : Item
    {
        $builder->createItem();
        return $builder->getItem();
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return ItemDirector
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }


}
