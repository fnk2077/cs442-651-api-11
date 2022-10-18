<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Provider\Address;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $env = env('DB_DATABASE');
        $this->assertEquals("testing",$env);

        $this->assertTrue(true);
    }

}
