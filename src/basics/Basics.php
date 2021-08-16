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
     * The $minute variable contains a number from 0 to 59 (i.e. 10 or 25 or 60 etc).
     * Determine in which quarter of an hour the number falls.
     * Return one of the values: "first", "second", "third" and "fourth".
     * Throw InvalidArgumentException if $minute is negative of greater then 60.
     * (Implement this functionality in isMinutesException method from BasicsValidator Class and use it here)
     * @see https://www.php.net/manual/en/class.invalidargumentexception.php
     *
     * Make sure the next PHPDoc instructions will be added:
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
     * The $year variable contains a year (i.e. 1995 or 2020 etc).
     * Return true if the year is Leap or false otherwise.
     * Throw InvalidArgumentException if $year is lower then 1900.
     * (Implement this functionality in isYearException method from BasicsValidator Class and use it here)
     * @see https://en.wikipedia.org/wiki/Leap_year
     * @see https://www.php.net/manual/en/class.invalidargumentexception.php
     *
     * Make sure the next PHPDoc instructions will be added:
     * @param int $year
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function isLeapYear(int $year): bool
    {
        // TODO: Implement isLeapYear() method.
    }

    /**
     * The $input variable contains a string of six digits (like '123456' or '385934').
     * Return true if the sum of the first three digits is equal with the sum of last three ones
     * (i.e. in first case 1+2+3 not equal with 4+5+6 - need to return false).
     * Throw InvalidArgumentException if $input contains more then 6 digits.
     * (Implement this functionality in isValidStringException method from BasicsValidator Class and use it here)
     * @see https://www.php.net/manual/en/class.invalidargumentexception.php
     *
     * Make sure the next PHPDoc instructions will be added:
     * @param string $input
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function isSumEqual(string $input): bool
    {
        // TODO: Implement isSumEqual() method.
    }


}