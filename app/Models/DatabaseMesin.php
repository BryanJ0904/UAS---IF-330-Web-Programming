<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatabaseMesin extends Model
{
    protected $table = 'mesin';
    protected $primaryKey = 'id';
    public $timestamps = false; 

    protected $fillable = [
        'gambar',
        'part_no',
        'part_name',
        'deskripsi',
    ];
}
