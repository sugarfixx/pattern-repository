<?php


namespace ItemDisplay;


class Item implements \JsonSerializable
{
    private $image;

    private $title;

    private $creator;

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @return Item
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Item
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param mixed $creator
     * @return Item
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
        return $this;
    }


    public function jsonSerialize()
    {
        return [
            'title' => $this->title,
            'image' => $this->image,
            '_creator' => $this->creator
        ];
    }


}
