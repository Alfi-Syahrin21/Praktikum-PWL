<?php

namespace Database\Seeders;

use App\Models\staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // staff::create
        // ([
        //     'nip' => '221402021',
        //     'email' => 'budi07@gmail.com',
        //     'nama' => 'Budi',
        //     'tanggal_lahir' => '2004-03-21',
        //     'no_hp' => '081260232981'
        // ]);

        staff :: factory(4)->create();
    }
}
