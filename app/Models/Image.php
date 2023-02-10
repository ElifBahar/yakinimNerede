<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';

    public function getDepremzedeImages() {
        return $this->belongsTo('App\Models\Depremzede', 'depremzede_id', 'id');
    }
}
