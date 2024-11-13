<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    public function karyawan()
{
    return $this->belongsTo(Karyawan::class);
}

    use HasFactory;

    protected $fillable = [
        'nama', 'tanggal', 'status',
    ];
}
