<?php

namespace Tests\Feature;

use Tests\TestCase;

class TaskManagementTest extends TestCase
{
    public function test_user_can_create_a_task(): void
    {
        $response = $this->post('/tasks', [
            'task_name' => 'Buy groceries',
            'description' => 'Milk, bread, and eggs',
            'due_date' => '2026-10-05',
        ]);

        $response->assertRedirect('/');

        $this->assertDatabaseHas('tasks', [
            'task_name' => 'Buy groceries',
            'description' => 'Milk, bread, and eggs',
            'status' => 'Pending',
            'due_date' => '2026-10-05',
        ]);
    }
}
