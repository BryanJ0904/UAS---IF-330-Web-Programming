<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatabaseProduk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    public $timestamps = false; 

    protected $fillable = [
        'gambar',
        'part_no',
        'part_name',
        'deskripsi',
    ];
}
