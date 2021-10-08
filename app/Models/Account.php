<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'phone',
        'ktp',
        'ktp_photo',
        'npwp',
        'npwp_photo',
        'address',
        'city',
        'province',
        'gender',
        'date_of_birth',
        'place_of_birth',
        'org_unit',
        'work_unit',
        'position',
        'spesimen_file'
    ];
    public function user(){
        return $this->belongsTo(User::class,'id','user_id');
    }
}
