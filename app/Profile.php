<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'date', 'about_me', 'cellphone', 'career', 'G', 'created_at', 'updated_at'
    ];

    protected $primaryKey = 'user_id';

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
