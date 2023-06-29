<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
        return [
            'title' => $this->faker->sentence(1),
            'description' => $this->faker->text(100),
            'status_id' => Status::orderBy(DB::raw('RAND()'))->first()->id,
            'user_id' => User::orderBy(DB::raw('RAND()'))->first()->id
        ];
    }
}
