<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $statusIds = Status::getStatusIds();
        $userIds = User::getUserIds();
        return [
            'title' => $this->faker->sentence(1),
            'description' => $this->faker->text(100),
            'status_id' => array_rand($statusIds, 1),
            'user_id' => array_rand($userIds, 1)
        ];
    }
}
