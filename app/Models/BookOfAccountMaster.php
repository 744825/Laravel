<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookOfAccountMaster extends Model
{

    use HasFactory;

    protected $table='am_books_of_account_master';
    protected $primaryKey = 'BOOKS_OF_A';
    protected $fillable=[
        'BOOKS_OF_A',
        'SECTION_ID ',
        'BOOKS_OF_2',
        'INSTITUTE',
        'LOCATION',
    ];
    public $timestamps = false;
}
