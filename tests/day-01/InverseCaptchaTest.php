<?php

declare(strict_types=1);

namespace AdventOfCode\Day1;

use PHPUnit\Framework\TestCase;

final class InverseCaptchaTest extends TestCase
{
    /**
     * @dataProvider examples
     */
    public function testInverseCaptchaSum(string $input, int $sum): void
    {
        self::assertEquals($sum, InverseCaptcha::sum($input));
    }

    /**
     * @dataProvider examples2
     */
    public function testInverseCaptchaSum2(string $input, int $sum): void
    {
        self::assertEquals($sum, InverseCaptcha::sum2($input));
    }

    public function examples(): array
    {
        return [
            ['1122', 3],
            ['1111', 4],
            ['1234', 0],
            ['91212129', 9],
        ];
    }

    public function examples2(): array
    {
        return [
            ['1212', 6],
            ['1221', 0],
            ['123425', 4],
            ['123123', 12],
            ['12131415', 4],
        ];
    }
}
