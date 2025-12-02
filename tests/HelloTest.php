<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../index.php';

class HelloTest extends TestCase
{
    public function testHelloFunction()
    {
        $this->assertEquals('helloworld', hello());
    }
}
