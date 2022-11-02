<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image'];
    public function image()
    {
        return $this->hasOne(File::class, 'id', 'image_id');
    }
}
