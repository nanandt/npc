<?php

namespace Database\Seeders;

use App\Models\Pelatih;
use Illuminate\Database\Seeder;

class PelatihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelatihs = collect([
            'Bambang Pamungkas',
            'Sukri',
            'Slamet Wijayanto',
            'Sugeng Rahayu',
            'Sinar Jaya',
            'Dewi Susanto',
            'Kepin Suryajana',
            'Suryajana Rahayu',
            'Eka Rahayu',
            'Eka Puji',
            'Eka Putri',
            'Eka Putra kedua',
            'Eka Putra ketiga',
            'Eka Putge',
        ]);
        $pelatihs->each(function($pelatih){
            Pelatih::create([
                'nama_pelatih' => $pelatih,
                'cabang_olahraga_id' => mt_rand(2, 10),
                'thumbnail' => null
            ]);
        });
    }
}
