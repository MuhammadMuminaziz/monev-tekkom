<?php

namespace Database\Seeders;

use App\Models\Periode;
use App\Models\Tahun;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentYear = Carbon::now()->subYear(3);
        Periode::create([
            'year' => date('Y')
        ]);

        for ($i = 1; $i <= 3; $i++) {
            Tahun::create([
                'name' => $currentYear->addYear(1)->year
            ]);
        }
    }
}
