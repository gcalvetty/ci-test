<?php

namespace Tests\Feature;

use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        /*
        $response = $this->get('/');

        $response->assertStatus(200);
        */
        $user = UserFactory::new()->create();
        dump($user->toArray());
    }
}
