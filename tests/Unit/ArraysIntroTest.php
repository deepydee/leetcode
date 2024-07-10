<?php

declare(strict_types=1);

namespace Tests\Unit;

use LeetCode\Arrays\ArraysIntroSolution;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class ArraysIntroTest extends TestCase
{
    private ArraysIntroSolution $solution;

    protected function setUp(): void
    {
        $this->solution = new ArraysIntroSolution();
    }

    #[Test]
    #[DataProvider('consecutiveOnesProvider')]
    public function it_returns_max_consecutive_ones(array $data, int $expected): void
    {
        $this->assertSame($expected, $this->solution->findMaxConsecutiveOnes($data));
    }

    public static function consecutiveOnesProvider(): array
    {
        return [
            'three ones'  => [[1,1,0,1,1,1], 3],
            'two ones' => [[1,0,1,1,0,1], 2],
        ];
    }
}
