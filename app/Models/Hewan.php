<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    protected $fillable =[
        'Nama',
        'Deskripsi',
        'Foto'
    ];
    use HasFactory;
}
