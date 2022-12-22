<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
    ];
    public function team(){
        //一個科系有多個班級
        return $this->hasMany(Team::class);
    }
    public function student(){
        //一個科系有多個學生
        return $this->hasMany(Student::class);
    }
}
