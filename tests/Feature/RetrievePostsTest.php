<?php

namespace Tests\Feature;


use App\User;
use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RetrievePostsTest extends TestCase
{
    use RefreshDatabase;


    public function test_a_user_retrieve_posts() {

        $this->withoutExceptionHandling();

        // thieu 'api' thi bi loi Unauthenticated
        $this->actingAs($user =  factory(User::class)->create(), 'api');

        $posts = factory(Post::class,2)->create(['user_id' => $user->id ]);

        $response = $this->get('/api/posts');

        $response->assertStatus(200)
                ->assertJson([
                    'data' => [
                        [
                            'data' => [
                                'type' => 'posts',
                                'post_id' => $posts->last()->id,
                                'attributes' => [
                                    'body' => $posts->last()->body,
                                    'image' => $posts->last()->image,
                                    'posted_at' => $posts->last()->created_at->diffForHumans(),
                                        
                                ]
                            ]
                        ],

                        [
                            'data' => [
                                'type' => 'posts',
                                'post_id' => $posts->first()->id,
                                'attributes' => [
                                    'body' => $posts->first()->body,
                                    'image' => $posts->first()->image,
                                    'posted_at' => $posts->first()->created_at->diffForHumans(),
                                        
                                ]
                            ]
                        ]
                    ],


                    'links' => [
                        'self' => url('/posts'),
                    ],
                    
            ]);
        }

        public function  test_a_user_can_only_retrieve_their_posts() {

            $this->actingAs($user =  factory(User::class)->create(), 'api');

            $posts = factory(Post::class,2)->create();

            $response = $this->get('/api/posts');

            $response->assertStatus(200)
                    ->assertExactJson([
                        'data' => [],
                        'links' => [
                            'self' => url('/posts'),
                        ],
                    ]);  
        }


}











