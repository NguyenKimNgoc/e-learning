<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class TypeBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('l_banner_type')->insert([
            [
                'name'=>'Du học',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Tiến Anh',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Marketing',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'IT',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Trắc địa',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Tin Học Văn Phòng',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
        ]);
    }
}
