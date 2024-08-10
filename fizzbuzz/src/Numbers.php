<?php

declare(strict_types=1);

namespace Kinobi;

class Numbers
{
    /** @var callable */
    private $display;

    public function __construct(callable $display)
    {
        $this->display = $display;
    }

    public function showNumbers(int $count, callable $renderer): void
    {
        for ($i = 0; $i < $count; $i++) {
            ($this->display)(($renderer)($i+1));
        }
    }
}
