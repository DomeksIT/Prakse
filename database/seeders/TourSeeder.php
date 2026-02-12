<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
public function run()
{
 $tours = [
  [
  'title'=>'Ceļojums uz Turciju',
  'price'=> 850,
  'currency'=>'EUR',
  'start_date'=>'2026-06-10',
  'end_date'=>'2026-06-17',
  'description'=>'7 naktis viesnīcā ar all inclusive pakalpojumiem'
 ],
 [
  'title'=>'Ceļojums uz Dubai',
  'price'=> 1000,
  'currency'=>'EUR',
  'start_date'=>'2026-06-10',
  'end_date'=>'2026-06-17',
  'description'=>'7 naktis viesnīcā ar all inclusive pakalpojumiem'
 ],
 [
  'title'=>'Ceļojums uz Miami',
  'price'=> 3000,
  'currency'=>'EUR',
  'start_date'=>'2026-06-10',
  'end_date'=>'2026-06-17',
  'description'=>'7 naktis viesnīcā ar all inclusive pakalpojumiem'
 ],
 ];
foreach($tours as $tour){
  DB::table('tours')->insert([
    'title'=>$tour['title'],
    'price'=>$tour['price'],
    'currency'=>$tour['currency'],
    'start_date'=>$tour['start_date'],
    'end_date'=>$tour['end_date'],
    'description'=>$tour['description'],
    'created_at'=>now(),
    'updated_at'=>now(),

  ]);
}
}
}
