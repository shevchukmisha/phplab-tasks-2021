<?php

namespace arrays;

class Arrays implements ArraysInterface
{

    /**
     * @param array $input
     * @return array
     */
    public function repeatArrayValues(array $input): array
    {
        $array = [];
        foreach ($input as $item) {
            for ($i = 0; $i < $item; $i++) {
                array_push($array, $item);
            }
        }
        return $array;
    }

    /**
     * @param array $input
     * @return int
     */
    public function getUniqueValue(array $input): int
    {
        $countArrayElement = array_filter(array_count_values($input), function($item) {
            return $item == 1;
        });
        return count($countArrayElement) > 0 ? min(array_keys($countArrayElement)) : 0;
    }

    /**
     * @param array $input
     * @return array
     */
    public function groupByTag(array $input): array
    {
        $array = [];
        sort($input);
        foreach ($input as $item) {
            foreach ($item['tags'] as $tag) {
                $array[$tag][] = $item['name'];
            }
        }
        ksort($array);
        return $array;
    }
}
