<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewAnhoterUsersTweetsTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testViewAnhoterUsersTweets()
    {
        $user = factory(User::class)->create(['username' => 'jhondoe']);

        $tweet = factory(Tweet::class)->make(['body' => 'My first tweet']);

        $user->tweets()->save($tweet);



        $this->visit('/jhondoe')
            ->see('My first tweet');
    }
}
