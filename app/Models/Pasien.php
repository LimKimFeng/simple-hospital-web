<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';

    protected $primaryKey = 'idPasien';

    public $keyType = 'string';

    public $timestamps = false;

    protected $fillable = ['namaPasien', 'jenis_kelamin', 'alamat'];

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class, 'idPasien', 'idPasien');
    }
}
