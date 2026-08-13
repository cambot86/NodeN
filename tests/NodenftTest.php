<?php
/**
 * Tests for NodeNFT
 */

use PHPUnit\Framework\TestCase;
use Nodenft\Nodenft;

class NodenftTest extends TestCase {
    private Nodenft $instance;

    protected function setUp(): void {
        $this->instance = new Nodenft(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodenft::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
