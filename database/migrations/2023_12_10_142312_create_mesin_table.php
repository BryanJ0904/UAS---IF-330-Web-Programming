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

        // $data = [
        //     [
        //         'gambar' => 'produk/r1gAyL7MZEyL7D9qPfw8OjJiUYDLKBMqfMiIaceG.jpg',
        //         'part_no' => '02',
        //         'part_name' => 'Stay FR Cover',
        //         'deskripsi' => 'Digunakan Untuk Motor Honda.',
        //     ],
        //     [
        //         'gambar' => 'produk/5shdtgLfq58yPXcl6Mot3w425rNGsy0QmI45zuIb.jpg',
        //         'part_no' => '03',
        //         'part_name' => 'Stay IGN Coil',
        //         'deskripsi' => 'Digunakan Untuk Motor Honda.',
        //     ],
        // ];

        // DB::table('mesin')->insert($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesin');
    }
};
