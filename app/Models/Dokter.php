<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'doctors';

    protected $primaryKey = 'idDokter';

    public $keyType = 'string';

    public $timestamps = false;

    protected $fillable = ['idDokter', 'namaDokter', 'spesialis', 'nomorTelepon'];

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class, 'idDokter', 'idDokter');
    }
}
