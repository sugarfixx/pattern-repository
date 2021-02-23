<?php


namespace ItemBuilder;


interface ItemBuilderInterface
{
    public function setItem($type);

    public function setTitle($title);

    public function getItem();
}
