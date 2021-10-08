<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'file_name',
        'path',
        'expired',
        'signing_participation_type',
    ];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    } 
}
