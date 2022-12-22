<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'department_id',
        'class',
        'admission',
    ];
    public function department(){
        //一個班級只會有一個科系
        return $this->belongsTo(Department::class);
    }
    public function student(){
        //一個班級會有多個學生
        return $this->hasMany(Student::class);
    }
}
