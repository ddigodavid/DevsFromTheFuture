<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';
    protected $fillable = [
        'title',
        'description',
        'preview',
        'status',
        'imagePath',
        'area',
        'slug'
    ];

    public function getAreaLabel()
    {
        $labels = [
            'tendencies' => 'Tendências',
            'diversity'  => 'Diversidade',
            'skills'     => 'Habilidades',
        ];

        return array_get($labels, $this->area);
    }
}