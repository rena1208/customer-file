<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class PostItemTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testGetPostItem()
    {
        Auth::shouldReceive('check')->andReturn(true);

        $data = ['id' => 1];
        $response = $this->get(route('item.create', $data));
        $response->assertStatus(200);
    }  
}
