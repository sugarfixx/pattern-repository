<?php

namespace ItemBuilder;

interface Builder
{
    public function createItem();

    public function getItem() : Item;
}
