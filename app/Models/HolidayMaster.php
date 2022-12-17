<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HolidayMaster extends Model
{

    use HasFactory;

    protected $table='cms_holyday_master';
   // protected $primaryKey = 'SECTION_ID';
    protected $fillable=[
        'INSTITUTE_',
        'DATE',
        'REASON',
        'ADDED_BY',
        'EDITED_BY'

    ];
    public $timestamps = false;

    public function getCols(){
        return [
            'INSTITUTE_',
            'DATE',
            'REASON',
            'ADDED_BY',
            'EDITED_BY'
        ];
    }
}
