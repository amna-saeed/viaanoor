<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'course',
        'course_id',
        'message',
        'status',
    ];

    public function courseRelation()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
