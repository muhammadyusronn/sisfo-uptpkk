<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purposes extends Model
{
    use HasFactory;
    protected $table = 'purposes';
    protected $primaryKey = 'tujuan_id';
}
