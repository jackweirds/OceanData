<?php
/**
 * Tests for OceanData
 */

use PHPUnit\Framework\TestCase;
use Oceandata\Oceandata;

class OceandataTest extends TestCase {
    private Oceandata $instance;

    protected function setUp(): void {
        $this->instance = new Oceandata(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Oceandata::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
