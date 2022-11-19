<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'mahasiswas';

    /**-- Nama field yang boleh diisi bebas*/
    protected $fillable = ['NRP_083', 'Nama_083', 'Email_083', 'Alamat_083'];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $guarded = ['IDMhs_083'];
}