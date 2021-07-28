<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Membuat Relasi table
    public function mapel(){
        return $this->belongsTo(Mapel::class);
    }
}
