<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $table = 'warga';
    // protected $fillable = ['nama', 'nik', 'dst...'] // pilih field yang diperbolehkan untuk diisi satu-persatu
    protected $guarded = []; // menentukan field yang dijaga, tapi disini kita kosongkan, dimana artinya tidak ada field yang dijaga sehingga semua field dapat diisi

}
