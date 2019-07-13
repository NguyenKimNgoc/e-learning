<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('l_cities')->insert([
            [
                'name' => 'Hà Nội',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'TP Hồ Chí Minh',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'An Giang',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Bà Rịa - Vũng Tàu',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Bắc Giang',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Bắc Kạn',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Bạc Liêu',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Bắc Ninh',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Bến Tre',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Bình Định',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Bình Dương',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Bình Phước',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Bình Thuận',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Cà Mau',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Cao Bằng',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Đắk Lắk',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Đắk Nông',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Điện Biên',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Đồng Nai',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Đồng Tháp',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Gia Lai',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Hà Giang',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Hà Nam',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Hà Tĩnh',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Hải Dương',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Hậu Giang',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Hòa Bình',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Hưng Yên',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Khánh Hòa',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Kiên Giang',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Kon Tum',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Lai Châu',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Lâm Đồng',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Lạng Sơn',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Lào Cai',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Long An',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Nam Định',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Nghệ An',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Ninh Bình',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Ninh Thuận',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Phú Thọ',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quảng Bình',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quảng Nam',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quảng Ngãi',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quảng Ninh',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quảng Trị',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Sóc Trăng',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Sơn La',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Tây Ninh',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thái Bình',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thái Nguyên',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thanh Hóa',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thừa Thiên Huế',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Tiền Giang',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Trà Vinh',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Tuyên Quang',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Vĩnh Long',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Vĩnh Phúc',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Yên Bái',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Phú Yên',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Cần Thơ',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Đà Nẵng',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Hải Phòng',
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ]
    ]);
    }
}
