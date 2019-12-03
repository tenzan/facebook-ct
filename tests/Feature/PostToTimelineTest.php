<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Support\Facades\App;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostToTimelineTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_post_a_text_post()
    {
        $this->withoutExceptionHandling();
         $this->actingAs($user = factory(User::class)->create(), 'api');

         $response = $this->post('/api/posts', [
             'data' => [
                 'type' => 'posts',
                 'attributes'=> [
                     'body' => 'Testing Body',
                 ]
             ]
         ]);

         $post = \App\Post::first();

         $response->assertStatus(201);
    }
}
