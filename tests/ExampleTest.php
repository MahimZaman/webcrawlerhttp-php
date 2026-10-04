<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing] // 👈 Tells PHPUnit this specific test doesn't track coverage targets
final class ExampleTest extends TestCase
{
    public function test_it_works(): void
    {
        $this->assertTrue(true);
    }
}
