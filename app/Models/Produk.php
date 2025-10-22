<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Laravel secara default mengira nama tabel = jamak dari nama model
    // Jadi model Produk otomatis pakai tabel "produks"
    // Karena tabelmu bernama "produk", harus didefinisikan manual:
    protected $table = 'produk';

    // Field yang boleh diisi (mass assignment)
    protected $fillable = [
        'nama',
        'harga',
        'stok',
    ];
}
