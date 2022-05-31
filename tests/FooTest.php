<?php

namespace StackTrace\MinimalPackage\Tests;

use PHPUnit\Framework\TestCase;
use StackTrace\MinimalPackage\Foo;

class FooTest extends TestCase {

    /** @test */
    public function it_should_return_bar()
    {
        $foo = new Foo();

        $this->assertEquals("bar", $foo->bar());
    }

}
