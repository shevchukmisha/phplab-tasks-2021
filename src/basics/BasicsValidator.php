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
        // TODO: Implement isMinutesException() method.
        if ($minute < 0 || $minute > 60) {
            throw new \InvalidArgumentException();
        }
    }

    /**
     * @param int $year
     * @throws \InvalidArgumentException
     */
    public function isYearException(int $year): void
    {
        // TODO: Implement isYearException() method.
        if ($year < 1900 ){
            throw new \InvalidArgumentException();
        }

    }

    /**
     * @param string $input
     * @throws \InvalidArgumentException
     */
    public function isValidStringException(string $input): void
    {
        // TODO: Implement isValidStringException() method.
        if (!(ctype_digit($input)) || strlen($input) < 6 ) {
            throw new \InvalidArgumentException();
        }
    }
}