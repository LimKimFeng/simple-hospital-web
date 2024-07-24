<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungan';
    protected $primaryKey = 'idKunjungan';
    // public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'idKunjungan',
        'idPasien',
        'idDokter',
        'tanggal',
        'keluhan'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'idPasien', 'idPasien');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'idDokter', 'idDokter');
    }
}

