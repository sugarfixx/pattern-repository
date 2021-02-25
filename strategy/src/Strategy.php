<?php


interface Strategy
{
    public function doOrder(array $data) : array;
}
