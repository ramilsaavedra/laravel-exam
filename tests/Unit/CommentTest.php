<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\Comment;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    // if all field is correct
    public function storeCommentWhenEnterCorrectPassword(){
        $generatedUser = factory(User::class)->create();
        $this->post('/add-comment', [
            '_token' => csrf_token(),
            'user_id' => $generatedUser->id,
            'body' => 'test',
            'password' => '123' //correct password
        ]);
        $this->assertCount(1, Comment::all());
    }
}
