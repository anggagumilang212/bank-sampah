<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSampah extends Model
{
    use HasFactory;
    protected $timestamp = false;
    protected $table = 'jenis_sampahs';
    protected $fillable = ['nama', 'deskripsi', 'foto', 'harga'];

}
