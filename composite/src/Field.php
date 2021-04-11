<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 11/04/2021
 * Time: 11:12
 */

namespace Composite;


abstract class Field
{
    protected $parent;

    public function setParent(Field $parent)
    {
        $this->parent = $parent;
    }

    public function getParent(): Field
    {
        return $this->parent;
    }

    public function add(Field $field): void { }

    public function remove(Field $field): void { }

    public function isComposite(): bool
    {
        return false;
    }

    abstract public function operation(): string;
}
