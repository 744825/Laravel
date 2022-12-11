<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionMaster extends Model
{

    use HasFactory;

    protected $table='cms_section_master';
    protected $primaryKey = 'SECTION_ID';
    protected $fillable=[
        'SECTION_ID',
        'INSTITUTE_',
        'SECTION'

    ];
    public $timestamps = false;

    public function getCols(){
        return [
            'SECTION_ID',
            'INSTITUTE_',
            'SECTION'
        ];
    }
}
