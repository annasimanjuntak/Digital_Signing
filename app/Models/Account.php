<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'ktp_photo',
        'name',
        'date_of_birth',
        'place_of_birth',
        'gender',
        'address',
        'city',
        'province',
        'npwp',
        'npwp_photo',
        'org_unit',
        'work_unit',
        'position',
    ];
}
