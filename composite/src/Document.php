<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 11/04/2021
 * Time: 11:10
 */

namespace Composite;


class Document extends Field
{
    protected $children;

    public function __construct()
    {
        $this->children = new \SplObjectStorage();
    }

    public function add(Field $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    public function remove(Field $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    public function isComposite(): bool
    {
        return true;
    }

    public function operation(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->operation();
        }

        return "Branch(" . implode("+", $results) . ")";
    }
}
