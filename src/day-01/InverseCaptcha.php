<?php

declare(strict_types=1);

namespace AdventOfCode\Day1;

final class InverseCaptcha
{
    public static function sum(string $input): int
    {
        return array_sum(array_filter(str_split($input), function (string $current, int $key) use ($input): bool {
            return $current === $input[($key + 1) % \strlen($input)];
        }, ARRAY_FILTER_USE_BOTH));
    }

    public static function sum2(string $input): int
    {
        return array_sum(array_filter(str_split($input), function (string $current, int $key) use ($input): bool {
            return $current === $input[($key + \strlen($input) / 2) % \strlen($input)];
        }, ARRAY_FILTER_USE_BOTH));
    }
}
