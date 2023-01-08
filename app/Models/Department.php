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
    public $timestamps = false;//不用儲存建立時間及修改時間
    public function team(){
        //一個科系有多個班級
        return $this->hasMany(Team::class);
    }
    public function student(){
        //一個科系有多個學生
        return $this->hasMany(Student::class);
    }
    public function teacher(){
        return $this->hasMany(Teacher::class);
    }
}
