<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Buku as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table="buku";
    public $timestamps= false;
    protected $primaryKey = 'id_buku';

    protected $fillable = [
        'id_buku',
        'Judul',
        'Penulis',
        'Penerbit',
        'Kategory',
        'Jumlah',
    ];
}
