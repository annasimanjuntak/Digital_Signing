<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentUserSigning extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'location',
        'document_id',
        'note',
        'sign_at',
    ];
}
