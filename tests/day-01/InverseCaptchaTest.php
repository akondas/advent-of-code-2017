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

    public function examples(): array
    {
        return [
            ['1122', 3],
            ['1111', 4],
            ['1234', 0],
            ['91212129', 9],
        ];
    }
}
