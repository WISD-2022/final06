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
        'application_date',
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
    public function student(){
        //一張假單只有一個學生
        return $this->belongsTo(Student::class);
    }
    public $timestamps = false;//不用儲存建立時間及修改時間
}
