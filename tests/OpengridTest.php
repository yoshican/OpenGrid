<?php
/**
 * Tests for OpenGrid
 */

use PHPUnit\Framework\TestCase;
use Opengrid\Opengrid;

class OpengridTest extends TestCase {
    private Opengrid $instance;

    protected function setUp(): void {
        $this->instance = new Opengrid(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Opengrid::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
