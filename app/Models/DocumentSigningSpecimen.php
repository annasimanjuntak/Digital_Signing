<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentSigningSpecimen extends Model
{
    use HasFactory;
    protected $fillable = [
        'document_signing_specimen_id',
        'coordinate_set_by',
        'coordinate_pos_status',
        'specimen_file',
      
    ];
}
