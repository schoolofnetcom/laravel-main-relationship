<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // MANY TO MANY
    public function artigos() {
        return $this->belongsToMany(Artigo::class, 'artigo_tags');
    }
}
