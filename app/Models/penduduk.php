<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
    use HasFactory;
    protected $table ='penduduk';
    protected $primaryKey = 'id';
    protected $fillable = ['nik','nama', 'kelamin','alamat','status', 'pekerjaan', 'kewarganegaraan', 'tempat_lahir', 'tanggal_lahir', 'golongan' ];
}
