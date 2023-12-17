<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mesin', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('gambar');
            $table->string('part_no');
            $table->string('part_name');
            $table->text('deskripsi');
        });

        $data = [
            [
                'gambar' => 'mesin/1UZYHitTQrZ37iGwYQedtWiGN8zOc6Gw94par1ha.jpg',
                'part_no' => '02',
                'part_name' => 'Mesin Press',
                'deskripsi' => '
                Berat : 80 ton 
                Merk : Simomura 
                Digunakan : Mesin ini bisa digunakan untuk proses produksi, proses blank bending, dan pircing',
            ],
            [
                'gambar' => 'mesin/RPqaSviYuMd0hmRr73hPvseoxbmwhz7nWAA0ahnJ.jpg',
                'part_no' => '03',
                'part_name' => 'Mesin Spot',
                'deskripsi' => '.',
            ],
            [
                'gambar' => 'mesin/g4hO9eijpLg0be6hpTtkDQ6yzb247zslmOO7thmV.jpg',
                'part_no' => '04',
                'part_name' => 'Mesin Miling',
                'deskripsi' => '.',
            ],
            [
                'gambar' => 'mesin/ewb4u4IrTlb9v8DcOpqrmHAjWtobWGVeHcIZzKWv.jpg',
                'part_no' => '05',
                'part_name' => 'Mesin Bubut',
                'deskripsi' => '.',
            ],
        ];

        DB::table('mesin')->insert($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesin');
    }
};
