<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class Student extends Model
{
    
    use HasFactory;

    protected $table='sm_class_master';//students is table name from controller
    protected $fillable=[
        'ACADEMIC_Y',
        'CLASS_ID',
        'COURSE_ID',
        'CLASS',
    ];
}
