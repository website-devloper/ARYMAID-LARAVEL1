<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model

{
    protected $fillable=['Name','Email','Tel','Msg'];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
