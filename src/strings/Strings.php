<?php

namespace strings;

class Strings implements StringsInterface
{

    /**
     * @param string $input
     * @return string
     */
    public function snakeCaseToCamelCase(string $input): string
    {
        $input = str_replace(" ", "", ucwords(str_replace("_", " ", $input)));
        $input[0] = strtolower($input[0]);
        return $input;
    }

    /**
     * @param string $input
     * @return string
     */
    public function mirrorMultibyteString(string $input): string
    {
        $inputArray = explode(" ", $input);
        $newArray = [];
        foreach ($inputArray as $word){
            preg_match_all("/./us", $word, $splite);
            $word = join("", array_reverse($splite[0]));
            array_push($newArray, $word);
        }
        return implode(" ", $newArray);
    }

    /**
     * @param string $noun
     * @return string
     */
    public function getBrandName(string $noun): string
    {
        return (substr($noun, 0, 1) == substr($noun, -1))
            ? ucfirst($noun) . substr($noun, 1) : ucwords("The $noun");
    }
}
