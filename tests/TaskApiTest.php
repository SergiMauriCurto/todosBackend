<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TaskApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testShowAllTasks()
    {
        $this->json('GET', '/api/task');
            ->dump();
            ->seeJson();
    }
}
