<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrepreunerships extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'entrepreneurships';
    protected $primaryKey = 'kewirausahaan_id';

    public function sluggable(): array
    {
        return [
            'kewirausahaan_slug' => [
                'source' => 'kewirausahaan_judul'
            ]
        ];
    }
}
