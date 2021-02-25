<?php


class GroupByTitle implements Strategy
{
    public function doOrder(array $data): array
    {
        $newArray = [];
        foreach ($data as $item) {
            $newArray[$item['title']] = $item['type'];
        }
        return $newArray;
    }
}
