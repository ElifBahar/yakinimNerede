<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depremzede extends Model
{
    use HasFactory;
    protected $table = 'depremzedes';

    public function getGittigiYerler() {
        return $this->hasOne(Depremzede::class, 'depremzede_id', 'id');
    }

    public function getImages() {
        return $this->hasMany(Depremzede::class, 'depremzede_id', 'id');
    }
}
