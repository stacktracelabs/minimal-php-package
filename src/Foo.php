<?php

namespace StackTrace\MinimalPackage;

class Foo {

    /**
     * Always returns bar.
     * 
     * @return string
     */
    public function bar(): string
    {
        return "bar";
    }

}
