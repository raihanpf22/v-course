<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;
    protected $table = 'kursus';
    protected $primaryKey = 'kursus_id';

    protected $fillable = [
        'kursus_nama',
        'kursus_keterangan',
        'kursus_durasi'
    ];
}
