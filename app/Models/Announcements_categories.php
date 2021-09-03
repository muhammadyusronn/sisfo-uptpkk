<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements_categories extends Model
{
    use HasFactory;
    protected $table = 'announcement_categories';
    protected $primaryKey = 'kategori_id';
}
