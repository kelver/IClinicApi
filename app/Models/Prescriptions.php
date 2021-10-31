<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescriptions extends Model
{
    use HasFactory;

    protected $table = 'prescriptions';

    public $fillable = [
        'uuid',
        'clinic',
        'physician',
        'patient',
        'text'
    ];

    public $timestamps = true;
}
