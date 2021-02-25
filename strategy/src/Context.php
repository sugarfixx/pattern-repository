<?php


class Context
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function doSomeStuff(): void
    {
        $products = [
            ['type' => 'book', 'title' => 'Real Life'],
            ['type' => 'video', 'title' => 'Bohemian Rhapsody'],
            ['type' => 'video', 'title' => 'Green Book'],
            ['type' => 'audio', 'title' => 'Plastic Hearts'],
            ['type' => 'book', 'title' => 'Future Nostalgia'],
            ['type' => '', 'title' => 'Whoopps! what is this?'],
        ];

        $result = $this->strategy->doOrder($products);
        header("Content-type: application/json");
        echo json_encode($result, JSON_PRETTY_PRINT);
    }
}
