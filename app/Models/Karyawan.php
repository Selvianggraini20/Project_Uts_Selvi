<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    // Di dalam model Karyawan
public function absensis()
{
    return $this->hasMany(Absensi::class);
}

    use HasFactory;

    protected $fillable = [
        'nama',
        'jabatan',
        'email',
        'telepon',
    ];
}
