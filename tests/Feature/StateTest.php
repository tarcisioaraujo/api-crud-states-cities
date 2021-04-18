<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\State;

class StateTest extends TestCase
{    

    use RefreshDatabase;

    public function test_list_states()
    {
        $response = $this->getJson('/api/states');

        $response->assertStatus(200);
    }  
    
    public function test_create_state()
    {
        $response = $this->postJson('/api/states', [
            'name' => 'Acre'
        ]);

        $response->assertStatus(200);
    }

    public function test_get_state()
    {
        $response = $this->postJson('/api/states', [
            'name' => 'Acre'
        ]);

        $response = $this->getJson('/api/states/1');

        $response->assertStatus(200);
    }

    public function test_update_state()
    {
        $response = $this->postJson('/api/states', [
            'name' => 'Acre'
        ]);

        $response = $this->getJson('/api/states/1');

        $response = $this->putJson('/api/states/1', [
            'name' => 'Recife'
        ]);

        $response->assertStatus(200);
    }

    public function test_delete_state()
    {
        $response = $this->postJson('/api/states', [
            'name' => 'Acre'
        ]);

        $response = $this->deleteJson('/api/states/1');

        $response->assertStatus(200);
    }
}
