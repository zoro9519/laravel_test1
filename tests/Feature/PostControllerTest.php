<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\{Post, User, Userlist};

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGetAllPosts()
    {
        // Create test user lists
        $listA = new Userlist();
        $listA->name = "UserLise_A";
        $listA->save();

        // Create test users
        User::factory()->count(2)->create();

        // Create test posts
        $posts = Post::factory()->count(3)->create();

        // Make a GET request to the getAllPosts endpoint
        $response = $this->get('/api/get-all-posts');

        // Assert that the response is successful
        $response->assertStatus(200);

        // Assert that the response has the correct JSON structure
        $response->assertJsonStructure([
            '*' => [
                'id',
                'title',
                'content',
                'owner_id',
                'social',
                'social_link',
                'created_at',
                'updated_at',
                'owner' => [
                    'id',
                    'name',
                    'list_id',
                    'created_at',
                    'updated_at',
                ],
            ],
        ]);
    }

    public function testSearchPosts()
    {
        // Create test user lists
        $listA = new Userlist();
        $listA->name = "UserLise_A";
        $listA->save();

        
        // Create test users
        $user = new User();
        $user->name = "John";
        $user->list_id = $listA->id;
        $user->save();

        // Create test post with specific attributes
        $post = Post::factory()->create([
            'title' => 'Test Title',
            'content' => 'Test Content',
            'owner_id' => $user->id,
            'social' => 'facebook',
            'social_link' => 'https://facebook.com',
        ]);

        // Make a GET request to the searchPosts endpoint with search criteria
        $response = $this->get('/api/search', [
            'searchText' => 'Test',
            'facebook' => 'true',
        ]);

        // Assert that the response is successful
        $response->assertStatus(200);

        // Assert that the response contains the test post data
        $response->assertJson([$post->toArray()]);
    }
}
