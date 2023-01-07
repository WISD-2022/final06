<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'department_id',
        'class_id',
        'name',
        'account',
        'password',
    ];
    public $timestamps = false;//不用儲存建立時間及修改時間
}
