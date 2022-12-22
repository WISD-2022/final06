<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'department_id',
        'team_id',
        'name',
        'student_id',
        'sex',
        'number',
    ];
    public function department(){
        //一個學生只有一個科系
        return $this->belongsTo(Department::class);
    }
}
