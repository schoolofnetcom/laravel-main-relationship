<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // ONE TO MANY (REVERSE)
    public function artigo() {
        return $this->belongsTo(Artigo::class);
    }
}
