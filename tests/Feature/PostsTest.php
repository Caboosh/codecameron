<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostsTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp() :void
    {
        parent::setUp();
        $this->post = Post::factory()->create();
    }

    /** @test */
    public function a_user_can_see_a_published_post()
    {
   // save request data to database
        $this->get('/posts/' . $this->post->id)->assertSee($this->post->body);
    }


    /** @test */
    public function a_user_can_see_published_posts()
    {
        $this->get('/posts')->assertSee($this->post->title);
    }
}
