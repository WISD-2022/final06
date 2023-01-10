<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'id',
        'department_id',
        'team_id',
    ];
    public $timestamps = false;//不用儲存建立時間及修改時間
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
