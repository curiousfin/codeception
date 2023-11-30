<?php
declare(strict_types=1);

namespace Tests;

use Codeception\Test\Unit;
use Curious\Codeception\Component\Matcher;

class MatcherTest extends Unit
{
    private Matcher $matcher;

    protected function _setUp()
    {
        $this->matcher = new Matcher();
    }

//    protected function _tearDown()
//    {
//        unset(
//            $this->matcher
//        );
//    }

    /**
     * @dataProvider getMatchData
     */
    public function testMatch($a, $b)
    {
        $this->assertTrue($this->matcher->match($a, $b));
    }

    public static function getMatchData(): array
    {
        return [
            [1, 1],
            [2, 2],
            [3, 3],
            [4, 4],
            [5, 5],
        ];
    }
}
