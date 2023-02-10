<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GittigiYerler extends Model
{
    use HasFactory;
    protected $table = 'gittigi_yerlers';

    public function getDepremzede() {
        return $this->belongsTo('App\Models\Depremzede', 'depremzede_id', 'id');
    }
}
