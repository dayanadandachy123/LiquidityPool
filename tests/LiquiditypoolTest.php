<?php
/**
 * Tests for LiquidityPool
 */

use PHPUnit\Framework\TestCase;
use Liquiditypool\Liquiditypool;

class LiquiditypoolTest extends TestCase {
    private Liquiditypool $instance;

    protected function setUp(): void {
        $this->instance = new Liquiditypool(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Liquiditypool::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
