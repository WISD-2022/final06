<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'user_id',
        'department_id',
        'team_id',
        'student_id',
        'sex',
        'number',
    ];
    public function leave(){
        //一個學生有多張假單
        return $this->hasMany(Leave::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function department(){
        //一個學生只有一個科系
        return $this->belongsTo(Department::class);
    }
    public function team(){
        //一個學生只有一個班級
        return $this->belongsTo(Team::class);
    }

    public $timestamps = false;//不用儲存建立時間及修改時間
}
