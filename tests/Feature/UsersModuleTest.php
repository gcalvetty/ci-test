<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     * @test
     */
    function example_new_test()
    {        
        $response = $this->get('/')
                    ->assertStatus(200)
                    ->assertSee('Documentation');        
    }
}
