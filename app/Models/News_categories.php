<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_categories extends Model
{
    use HasFactory;
    protected $table = 'news_categories';
    protected $primaryKey = 'kategori_id';
}
