<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    use HasFactory;

    protected $timestamp = false;
    protected $table = 'sampahs';
    protected $fillable = ['id_jenis_sampah', 'jumlah'];
    public function jenis_sampah()
    {
        return $this->belongsTo(JenisSampah::class, 'id_jenis_sampah');
    }
}
