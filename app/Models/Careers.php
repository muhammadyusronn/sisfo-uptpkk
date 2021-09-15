<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'careers';
    protected $primaryKey = 'karir_id';

    public function sluggable(): array
    {
        return [
            'karir_slug' => [
                'source' => 'karir_judul'
            ]
        ];
    }
}
