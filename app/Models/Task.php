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

    protected $appends = [
        'status', 'username'
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

    public function getStatusAttribute() {
        if($this->status_id > count(Status::all()) ||  $this->status_id < 1){
            $this->status_id = 1;
        }
        return Status::find($this->status_id)->name;
    }

    public function getUsernameAttribute() {
        $userIds = User::getUserIds();
        if(in_array($this->user_id, $userIds)){
          return User::find($this->user_id)->name;
        } else return "Anonymous";
      
    }
}
