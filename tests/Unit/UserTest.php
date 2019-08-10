<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class UserTest extends TestCase
{

      //use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {

        $shipping  = factory(User::class, 1)->create();
        $shippingArr = $shipping[0];


        $this->assertArrayHasKey('name', $shippingArr);
        $this->assertTrue(true);
    }
}
