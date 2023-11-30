<?php
declare(strict_types=1);

namespace Curious\Codeception\Component;

class Matcher
{
    public function match($a, $b)
    {
        return $a === $b;
    }
}