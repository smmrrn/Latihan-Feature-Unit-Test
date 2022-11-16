<?php

namespace Tests\Unit;

use Tests\TestCase;

class Latihan extends TestCase
{
    public function test_example()
    {
        // $this->assertTrue(true);
        $this->get("/dashboard")->assertStatus(200);
    }
}
