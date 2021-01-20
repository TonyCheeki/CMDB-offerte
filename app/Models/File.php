<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'product_id'
    ];

    public function setFilenamesAttribute($value)
    {
        $this->attributes['thumbnail'] = json_encode($value);
    }
}
