<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'start_date', 'end_date'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'user_exam', 'exam_id');
    }
}
