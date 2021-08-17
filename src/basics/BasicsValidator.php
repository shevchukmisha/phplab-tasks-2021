<?php

namespace basics;

use Doctrine\Instantiator\{Exception\InvalidArgumentException};

class BasicsValidator implements BasicsValidatorInterface
{

    /**
     * Implement the check functionality described in the method getMinuteQuarter (BasicsInterface Class) which throws Exception.
     *
     * Make sure the next PHPDoc instructions will be added:
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
     * Implement the check functionality described in the method getMinuteQuarter (BasicsInterface Class) which throws Exception.
     *
     * Make sure the next PHPDoc instructions will be added:
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
     * Implement the check functionality described in the method getMinuteQuarter (BasicsInterface Class) which throws Exception.
     *
     * Make sure the next PHPDoc instructions will be added:
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