<?php


namespace Adapter;


class JSONFormatter implements Formatter
{
    public function render($data)
    {
        $rd = ['products' => $data];
        header("Content-type: application/json");
        echo json_encode($rd, JSON_PRETTY_PRINT);
    }
}
