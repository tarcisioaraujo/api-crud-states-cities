<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Citie;
use App\State;

class CitieTest extends TestCase
{    

    use RefreshDatabase;

    public function test_list_cities()
    {
        $response = $this->getJson('/api/cities');

        $response->assertStatus(200);
    }  
    
    public function test_create_citie()
    {   
        $state = factory(State::class)->create();
        
        $citie = factory(Citie::class)->make();  

        $response = $this->postJson('/api/cities', [
            'name' => $citie->name,
            'state_id' => $state->id
        ]);

        $response->assertStatus(200);
    }

    public function test_get_citie()
    {
        $state = factory(State::class)->create();

        $citie = factory(Citie::class)->create(['state_id' => $state->id]);

        $response = $this->getJson('/api/cities/' . $citie->id);        

        $response->assertStatus(200);
    }

    public function test_update_citie()
    {
        $state = factory(State::class)->create();

        $citie = factory(Citie::class)->create(['state_id' => $state->id]);

        $citieFake = factory(Citie::class)->make();

        $response = $this->putJson('/api/cities/' . $citie->id, [
            'name' => $citieFake->name,
            'state_id' => $citie->state_id
        ]);

        $response->assertStatus(200);
    }

    public function test_delete_citie()
    {
        $state = factory(State::class)->create();

        $citie = factory(Citie::class)->create(['state_id' => $state->id]);        

        $response = $this->deleteJson('/api/cities/' . $citie->id);

        $response->assertStatus(200);
    }
}