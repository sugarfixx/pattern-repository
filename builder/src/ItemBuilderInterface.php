<?php


namespace ItemBuilder;


interface ItemBuilderInterface
{
    public function setItem($type, $data);

    public function setTitle($title);

    public function getItem();
}
