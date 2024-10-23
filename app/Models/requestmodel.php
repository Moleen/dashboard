<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requestmodel extends Model
{
    use HasFactory;

    protected $table = 'request'; // Nama tabel yang benar di database

    protected $fillable = [
        'id',
        'kelas_id',
        'mahasiswa_id',
        'keterangan',
        'created_at',
        'updated_at',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
