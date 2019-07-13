<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndustriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('l_user_industries')->insert([
            [
                'name' => 'Công Nghệ Thông Tin',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Dịch Vụ',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')

            ],
            [
                'name' => 'Vận Tải / Truyền Thông',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Dịch Vụ Tài Chính',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Trắc Địa',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Ngoại Ngữ',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [   'name' =>'Marketing',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' =>'Thiết Kế',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Tin Học Văn Phòng',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ]
        ]);
    }
}
