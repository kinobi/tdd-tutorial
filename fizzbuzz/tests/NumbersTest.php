<?php

declare(strict_types=1);

use Kinobi\FizzBuzz;
use Kinobi\Numbers;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertCount;
use function PHPUnit\Framework\assertEquals;

#[CoversClass(Numbers::class)]
class NumbersTest extends TestCase
{
    private int $displayCount = 0;
    private array $displayed = [];

    #[Test]
    public function it_should_display_each_number(): void
    {
        $numbers = new Numbers($this->display());
        $numbers->showNumbers(2, $this->render());

        assertEquals(2, $this->displayCount);
    }

    #[Test]
    public function it_should_render_each_number(): void
    {
        $numbers = new Numbers($this->display());
        $numbers->showNumbers(1, $this->render());
        
        assertEquals("x1", $this->displayed[0]);
    }

    #[Test]
    public function it_can_fizz_buzz(): void
    {
        $numbers = new Numbers($this->display());
        $fizzBuzz = new FizzBuzz();
        $numbers->showNumbers(100, $fizzBuzz->fizzBuzz(...));

        assertEquals(100, $this->displayCount);
        assertCount(100, $this->displayed);
        
        print_r($this->displayed);
    }

    public function display(): callable
    {
        return function(string $text): void
        {
            $this->displayCount++;
            $this->displayed[] = $text;
        };
    }

    public function render(): callable
    {
        return fn(int $number) => 'x' . (string)$number;
    }
}
