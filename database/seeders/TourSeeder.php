<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
public function run()
{
  DB::table('tours')->insert([
 'title'=>'Ceļojums uz Turciju',
 'price'=> 850,
 'currency'=> 'EUR',
 'start_date'=>'2026-06-10',
 'end_date'=>'2026-06-17',
'description'=>'7 naktis viesnicā ar all inclusive pakalpojumiem',
'created_at'=>now(),
'updated_at' => now(),
]);
}
}
