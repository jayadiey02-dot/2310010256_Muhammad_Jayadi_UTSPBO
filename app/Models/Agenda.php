<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda';      // kalau pake nama tabel 'agenda'
    protected $guarded = ['id'];      // atau gunakan $fillable = ['judul','keterangan'];
    // protected $fillable = ['judul', 'keterangan'];
}
