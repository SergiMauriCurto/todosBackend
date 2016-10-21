<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TaskApiTest extends TestCase
{
    protected $uri = '/api/task';

    use DatabaseMigrations;

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

    public function testShowOneTask() {

        $task = factory(App\Task::class)->create();
        $this->json('GET', $this->uri , '' , '/' , $task->id)
        $id = 1;
        $this->json('GET', '' . $this->uri . '' . '/' . $task->id )
            ->dump();
            ->seeJson();

    }
}
