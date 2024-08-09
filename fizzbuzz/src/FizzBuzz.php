<?php

declare(strict_types=1);

namespace Kinobi;

class FizzBuzz
{
    public function fizzBuzz(int $input): string
    {
        $result = "";

        if ($input % 3 === 0) {
            $result .= "Fizz";
        }

        if ($input % 5 === 0) {
            $result .= "Buzz";
        }

        if($result === "") {
            $result = (string)$input;
        }

        return $result;
    }
}
