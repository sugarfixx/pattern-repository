<?php


namespace ItemBuilder;

use ItemBuilder\Builder;

class ItemDirector
{
    public function build(Builder $builder) : Item
    {
        $builder->createItem();
        return $builder->getItem();
    }
}
