<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrincipalSubjectMaster extends Model
{

    use HasFactory;

    protected $table='cms_principal_subject_master';
    protected $primaryKey = 'PRINCIPAL_';
    protected $fillable=[
        'PRINCIPAL_',
        'PRINCIPAL2',
        'DDC_CLASS_',
        'CC_CLASS_N'

    ];
    public $timestamps = false;

    public function getCols(){
        return [
            'PRINCIPAL_',
            'PRINCIPAL2',
            'DDC_CLASS_',
            'CC_CLASS_N'
        ];
    }
}
