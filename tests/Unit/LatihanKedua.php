<?php

namespace Tests\Unit;

use Tests\TestCase;

class LatihanKedua extends TestCase
{
    public function test_example()
    {
        // $this->assertTrue(true);
        $this->get("/test")->assertStatus(200);
    }
}
