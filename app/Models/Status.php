<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public static function getStatusIds(){
        $statuses=Status::all();
        $statusIds =[];
        foreach ($statuses as $status){
            $statusIds[] = $status->id;
        }
        return $statusIds;
    }
}
