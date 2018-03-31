<?php declare(strict_types=1);

namespace MCampbell508\Tests;

use MCampbell508\Skeleton\SkeletonClass;
use PHPUnit\Framework\TestCase;

class SkeletonClassTest extends TestCase
{
    /**
     * @test
     */
    public function echo_phrase(): void
    {
        $myObj = new SkeletonClass();

        $res = $myObj->echoPhrase('foo');
        $this->assertEquals($res, 'foo');
    }
}
