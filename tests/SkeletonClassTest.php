<?php

namespace MCampbell508\Tests;

use MCampbell508\Skeleton\SkeletonClass;

class SkeletonClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testEchoPhrase()
    {
        $myObj = new SkeletonClass();

        $res = $myObj->echoPhrase('foo');
        $this->assertEquals($res, 'foo');
    }
}
