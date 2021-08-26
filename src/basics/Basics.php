<?php

namespace basics;

class Basics implements BasicsInterface
{
    /**
     * @var BasicsValidatorInterface
     */
    private $validator;

    public function __construct(BasicsValidatorInterface $basicsValidator)
    {
        $this->validator = $basicsValidator;
    }
    

    /**
     * @param int $minute
     * @return string
     * @throws \InvalidArgumentException
     */
    public function getMinuteQuarter(int $minute): string
    {
        $this->validator->isMinutesException($minute);
        $quarter = "fourth";
        if ($minute > 0 && $minute <= 15) {
            $quarter = "first";
        } elseif ($minute >=16 && $minute <=30) {
            $quarter = "second";
        } elseif ($minute >=31 && $minute <=45) {
            $quarter = "third";
        }
        return $quarter;
    }

    /**
     * @param int $year
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function isLeapYear(int $year): bool
    {
        $this->validator->isYearException($year);
        return ((($year % 4) == 0) && ((($year % 100) != 0) || ($year % 400) == 0) );
    }

    /**
     * @param string $input
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function isSumEqual(string $input): bool
    {
        $this->validator->isValidStringException($input);
        $s1 = $input[0]+$input[1]+$input[2];
        $s2 = $input[3]+$input[4]+$input[5];
        return ($s1 == $s2);
    }
}
