<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class profile extends Model
{

    protected $fillable =[
        'bio',
        'user_id',
        'webiste',
        'gender',
        'image'

    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
