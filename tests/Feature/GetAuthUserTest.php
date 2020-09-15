<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetAuthUserTest extends TestCase
{
    
    use RefreshDatabase;


    public function test_authenticated_user_can_be_fetched(){

        $this->withoutExceptionHandling();

        // thieu 'api' thi bi loi Unauthenticated
        $this->actingAs($user =  factory(User::class)->create(), 'api');

        $response = $this->get('/api/auth-user');

        $response->assertStatus(200)
                ->assertJson([
                    'data' => [
                        'user_id' =>$user->id,
                        'attributes' => [
                            'name' => $user->name,
                            
                        ] 
                    ],

                    'links' => [
                        'self' => url('users/'.$user->id),
                    ]
                ]);
    }
}
