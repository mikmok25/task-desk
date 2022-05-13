<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
