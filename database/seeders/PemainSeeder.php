<?php

namespace Database\Seeders;

use App\Models\Pemain;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pemains = collect([
            'Kepin Catur',
            'Rizky Catur',
            'Surya Catur',
            'Kempet Catur',
            'Slamet Catur',
            'Wayu Catur',
            'Udin Catur',
        ]);
        $pemains->each(function($pemain){
            Pemain::create([
            'nama_pemain' => $pemain,
            'cabang_olahraga_id' => rand(2, 13),
            'thumbnail' => null,
            ]);
        });
    }
}
