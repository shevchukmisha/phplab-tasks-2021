<?php

namespace basics;

use Doctrine\Instantiator\{Exception\InvalidArgumentException};

class BasicsValidator implements BasicsValidatorInterface
{

    /**
     * @param int $minute
     * @throws \InvalidArgumentException
     */
    public function isMinutesException(int $minute): void
    {
        if ($minute < 0 || $minute > 60) {
            throw new \InvalidArgumentException("$minute is negative of greater then 60");
        }
    }

    /**
     * @param int $year
     * @throws \InvalidArgumentException
     */
    public function isYearException(int $year): void
    {
        if ($year < 1900 ){
            throw new \InvalidArgumentException("$year less than 1900 ");
        }

    }

    /**
     * @param string $input
     * @throws \InvalidArgumentException
     */
    public function isValidStringException(string $input): void
    {
        if (!(ctype_digit($input)) || strlen($input) < 6 || strlen($input) > 6 ) {
            throw new \InvalidArgumentException("$input not equal 6 or not digit");
        }
    }
}
