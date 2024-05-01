<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortURL extends Model
{
    use HasFactory;

    protected $table = 'short_urls';

    protected $fillable = ['original_url', 'short_id'];

    public function getShortURLAttribute()
    {
        return url('/') . '/' . $this->short_id;
    }
}
