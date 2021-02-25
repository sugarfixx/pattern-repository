<?php


class GroupByType implements Strategy
{
    public function doOrder(array $data): array
    {
        $newArray = [];
        foreach ($data as $item) {
            $newArray[$item['type']][] = $item['title'];
        }
        return $newArray;
    }
}
