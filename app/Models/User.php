<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function prepareUserData(){
        $data = request()->validate(([
            'name'   => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'password'   => 'required|string',
            'role_id'   => 'required|integer'
     ]));
        if(!isset($data['role_id'])){
        $data['role_id'] = 1;
    }
        User::create($data);
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }

}
