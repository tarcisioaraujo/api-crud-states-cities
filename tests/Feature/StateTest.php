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
        $state = factory(State::class)->make();        

        $response = $this->postJson('/api/states', [
            'name' => $state->name
        ]);

        $response->assertStatus(200);
    }

    public function test_get_state()
    {
        $state = factory(State::class)->create();

        $response = $this->getJson('/api/states/' . $state->id);        

        $response->assertStatus(200);
    }

    public function test_update_state()
    {
        $state = factory(State::class)->create();

        $stateFake = factory(State::class)->make();

        $response = $this->putJson('/api/states/' . $state->id, [
            'name' => $stateFake->name
        ]);

        $response->assertStatus(200);
    }

    public function test_delete_state()
    {
        $state = factory(State::class)->create();

        $response = $this->deleteJson('/api/states/' . $state->id);

        $response->assertStatus(200);
    }
}
