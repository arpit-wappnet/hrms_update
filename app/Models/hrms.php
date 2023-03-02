<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class hrms extends Model
{

    use SoftDeletes;
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id')->withTrashed();
    }
}
