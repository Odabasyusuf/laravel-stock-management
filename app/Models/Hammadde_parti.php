<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hammadde_parti extends Model
{
    use HasFactory;
    protected $fillable = ['miktar','adet','musteri_id','arac_plaka','nakliye_seri_no','gelis_yeri','emval_yeri','agac_turu','urun_turu','sinif_kodu','boy_kodu','cap_kodu','durum','aciklama'];

}
