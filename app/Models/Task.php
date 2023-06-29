<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'status_id', 'user_id'
    ];

    public static function prepareTaskData(){
        $data = request()->validate(([
            'title'   => 'required|string|min:3|max:50',
            'description' => 'required|min:3',
            'user_id'   => 'required',
            'status_id'   => 'integer'
     ]));
        if(!isset($data['status_id'])){
        $data['status_id'] = 1;
    }
        Task::create($data);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
