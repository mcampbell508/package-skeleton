<?php declare(strict_types=1);

namespace MCampbell508\Tests;

use MCampbell508\Skeleton\SkeletonClass;

class SkeletonClassTest extends \PHPUnit_Framework_TestCase
{
    public function testEchoPhrase(): void
    {
        $myObj = new SkeletonClass();

        $res = $myObj->echoPhrase('foo');
        $this->assertEquals($res, 'foo');
    }
}
