<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'tpegawai';
    protected $fillable = ['nama','nip','npwp','jabatan','no_sk','tgl_sk','updated_at','created_at'];

}
