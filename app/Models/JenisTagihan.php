<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTagihan extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'jenis_tagihan', 
        'nominal_tagihan',
        
       
    ];
}
