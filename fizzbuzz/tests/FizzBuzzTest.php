<?php

declare(strict_types=1);

namespace Tests;

use Kinobi\FizzBuzz;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

use function PHPUnit\Framework\assertEquals;

#[CoversClass(FizzBuzz::class)]
class FizzBuzzTest extends TestCase
{
    #[Test]
    public function it_should_return_number_for_integer(): void
    {
        assertEquals("2", (new FizzBuzz())->fizzBuzz(2));
    }

    #[Test]
    public function it_should_return_fizz_for_three(): void
    {
        assertEquals("Fizz", (new FizzBuzz())->fizzBuzz(3));
    }

    #[Test]
    public function it_should_return_buzz_for_five(): void
    {
        assertEquals("Buzz", (new FizzBuzz())->fizzBuzz(5));
    }

    #[Test]
    public function it_should_return_fizz_for_multiple_of_three(): void
    {
        assertEquals("Fizz", (new FizzBuzz())->fizzBuzz(9));
    }

    #[Test]
    public function it_should_return_buzz_for_multiple_of_five(): void
    {
        assertEquals("Buzz", (new FizzBuzz())->fizzBuzz(10));
    }

    #[Test]
    public function it_should_return_fizzbuzz_for_multiple_of_three_and_five(): void
    {
        assertEquals("FizzBuzz", (new FizzBuzz())->fizzBuzz(15));
    }
}
