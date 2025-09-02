<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // Home view
    public function testHomeViewExist(): void
    {
        $response = $this->get('/');

        $response->assertViewIs('home');
    }

    // Conact view
    public function testContactViewExist(): void
    {
        $response = $this->get('/contact');

        $response->assertViewIs('contact');
    }

    // About view
    public function testAboutViewExist(): void
    {
        $response = $this->get('/about');

        $response->assertViewIs('about');
    }
}
