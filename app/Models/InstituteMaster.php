<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteMaster extends Model
{

    use HasFactory;

    protected $table='cms_institute_master';
    protected $primaryKey = 'INSTITUTE_';
    protected $fillable=[
        'INSTITUTE_',
        'INSTITUTE',
        'LOCATION',
        'DISTRICT'

    ];
    public $timestamps = false;

    public function getCols(){
        return [
        'INSTITUTE_',
        'INSTITUTE',
        'LOCATION',
        'DISTRICT'
        ];
    }
}
