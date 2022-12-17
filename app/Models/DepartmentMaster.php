<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentMaster extends Model
{

    use HasFactory;

    protected $table='cms_department_master';
    protected $primaryKey = 'DEPARTMENT';
    protected $fillable=[
        'DEPARTMENT',
        'INSTITUTE_',
        'DEPARTMEN2',
        'ADDED_BY'

    ];
    public $timestamps = false;

    public function getCols(){
        return [
            'DEPARTMENT',
            'INSTITUTE_',
            'DEPARTMEN2',
            'ADDED_BY'

        ];
    }
}
