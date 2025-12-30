<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Properti yang bisa diisi secara massal (Mass Assignment).
     * Pastikan nama-nama ini sesuai dengan kolom di database (migration).
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'specifications', 
        'image',
    ];

    /**
     * Konversi otomatis tipe data (Casting).
     * 'specifications' => 'array' sangat PENTING.
     * Ini membuat kolom JSON di database otomatis berubah jadi Array PHP saat dipanggil.
     * Jadi tidak perlu pakai json_decode() manual lagi di Controller/View.
     */
    protected $casts = [
        'specifications' => 'array',
    ];
}