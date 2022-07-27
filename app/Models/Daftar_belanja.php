<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar_belanja extends Model
{
    use HasFactory;
    protected $table = 'daftar_belanja';
    protected $fillable = ['rincian_belanja','nilai_rincian_belanja','updated_at','created_at'];
    // protected $guarded = [];
}
