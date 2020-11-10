<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    use HasFactory;

    // ONE TO MANY
    public function comments() {
        // return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
        return $this->hasMany(Comment::class);
    }

    // MANY TO MANY
    public function tags() {
        // return $this->belongsToMany(Tag::class, 'table_pivot_name', 'local_key_first', 'local_key_second');
        return $this->belongsToMany(Tag::class, 'artigo_tags');
    }
}
