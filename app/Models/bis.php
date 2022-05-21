<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bis extends Model
{
    use HasFactory;

    public function supir(){
        return $this->belongsTo(Supir::class, 'id_supirs');
    }
}
