<?php


namespace Adapter;


class XMLFormatter implements Formatter
{
    public function render($data)
    {
        header("Content-type: text/xml");
        echo $this->transform($data);
    }

    public function transform($data)
    {
        $d = json_encode($data);
        $array = json_decode($d, true);
        $xml = new SimpleXMLElement('<products/>');
        foreach ($array as $item) {
            $product = $xml->addChild('product');
            $product->addChild('title', $item['title']);
            $product->addChild('type', $item['type']);
        }
        return $xml->asXML();
    }
}
