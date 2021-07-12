<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kereste_parti extends Model
{
    use HasFactory;
    protected $fillable = ['musteri_id','urun_kalitesi','agac_turu','parti_detay','durum','servis1','servis2','arac_plaka','fatura_no'];
}
