<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class razdel extends Model
{
    use HasFactory;

    protected $table = 'razdels';
    protected $fillable = ['name'];

    public function gallery()
    {
        return $this->belongsToMany(gallery::class);
    }

}
