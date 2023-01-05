<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'student_id',
        'application',
        'leave',
        'reason',
        'picture',
        'start_time',
        'end_time',
        'check',
        'opinion',
        'check_date',
        'remark',
    ];
}
