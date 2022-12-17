<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationMaster extends Model
{

    use HasFactory;

    protected $table='cms_educational_details';
    protected $primaryKey = 'MEMBER_ID ';
    protected $fillable=[
        'MEMBER_ID ',
        'QUALIFIED_',
        'PASSING_MO',
        'PASSING_YE',
        'OBTAINED_M',
        'MAXIMUM_MA',
        'PERCENTAGE',
        'GRADE',
        'INSTITUTE',
        'BOARD_UNIV',

    ];
    public $timestamps = false;

    public function getCols(){
        return [
            'MEMBER_ID ',
            'QUALIFIED_',
            'PASSING_MO',
            'PASSING_YE',
            'OBTAINED_M',
            'MAXIMUM_MA',
            'PERCENTAGE',
            'GRADE',
            'INSTITUTE',
            'BOARD_UNIV',
        ];
    }
}
