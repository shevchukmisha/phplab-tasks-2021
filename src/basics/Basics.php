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
        // TODO: Implement getMinuteQuarter() method.
        $this->validator->isMinutesException($minute);

        if ($minute > 0 && $minute <= 15) {
            return "first";
        }
        elseif ($minute >=16 && $minute <=30) {
            return "second";
        }
        elseif ($minute >=31 && $minute <=45) {
            return "third";
        }
        else {
            return "fourth";
        }

    }

    /**
     * @param int $year
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function isLeapYear(int $year): bool
    {
        // TODO: Implement isLeapYear() method.
        $this->validator->isYearException($year);
        if ((($year % 4) == 0) && ((($year % 100) != 0) || ($year % 400) == 0) ) {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * @param string $input
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function isSumEqual(string $input): bool
    {
        // TODO: Implement isSumEqual() method.
        $this->validator->isValidStringException($input);
        $m = 100000;
        $n = 999999;

        for ($i = $m; $i <= $n; $i++){
            $s1 = $input[0]+$input[1]+$input[2];
            $s2 = $input[3]+$input[4]+$input[5];
            if ($s1 == $s2){
                return true;
            }
            else {
                return false;
            }
        }

    }


}