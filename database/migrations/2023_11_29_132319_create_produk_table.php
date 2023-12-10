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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('gambar');
            $table->string('part_no');
            $table->string('part_name');
            $table->text('deskripsi');
        });

        // Add multiple rows (example)
        $data = [
            [
                'gambar' => 'produk/r1gAyL7MZEyL7D9qPfw8OjJiUYDLKBMqfMiIaceG.jpg',
                'part_no' => '02',
                'part_name' => 'Stay FR Cover',
                'deskripsi' => 'Digunakan Untuk Motor Honda.',
            ],
            [
                'gambar' => 'produk/5shdtgLfq58yPXcl6Mot3w425rNGsy0QmI45zuIb.jpg',
                'part_no' => '03',
                'part_name' => 'Stay IGN Coil',
                'deskripsi' => 'Digunakan Untuk Motor Honda.',
            ],
            [
                'gambar' => 'produk/eAziMvP5oC1RLWv87CUKdfQsFXXncJT7vZpPDVic.jpg',
                'part_no' => '04',
                'part_name' => 'Clam',
                'deskripsi' => 'Digunakan Untuk Mobil Daihatsu.',
            ],
            [
                'gambar' => 'produk/mNwG8xwZKiiTaYgw3mEoHV6XIPZki3ovdfbqo2n3.jpg',
                'part_no' => '05',
                'part_name' => 'Play Plug',
                'deskripsi' => 'Digunakan Untuk Motor Honda.',
            ],
            [
                'gambar' => 'produk/xBQfaRVnOGOfHMvt8qGGZHaJ58rLYMyVfNUo8X26.jpg',
                'part_no' => '06',
                'part_name' => 'Stay Corn Horn',
                'deskripsi' => 'Digunakan Untuk Motor Honda.',
            ],
        ];

        DB::table('produk')->insert($data);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
