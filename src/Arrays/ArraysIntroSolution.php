<?php

declare(strict_types=1);

namespace LeetCode\Arrays;

final class ArraysIntroSolution
{
    public function findMaxConsecutiveOnes(array $nums): int
    {
        $len = count($nums);
        $max = 0;
        $cnt = 0;

        for ($i = 0; $i < $len; $i++) {
            if ($nums[$i] === 1) {
                $cnt++;
            } else {
                $cnt = 0;
            }

            $max = $max < $cnt ? $cnt : $max;
        }

        return $max;
    }
}
