<?php

declare(strict_types=1);

namespace Tests\Unit;

use LeetCode\Example;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    #[Test]
    public function testExample(): void
    {
        $example = new Example();

        $result = $example->foo();

        $this->assertSame('bar', $result);
    }
}
