<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{
    use HasFactory;
    protected $table = 'visi';
    protected $primaryKey = 'visi_id';

    protected $fillable = [
        'visi_konten',
        'visi_foto',
    ];
}
