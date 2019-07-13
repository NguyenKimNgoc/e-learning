<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('l_district')->insert([
            [
                'name' => 'Quận Ba Đình',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Hoàn Kiếm',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Hai Bà Trưng',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Đống Đa',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Tây Hồ',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Cầu Giấy',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Thanh Xuân',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Hoàng Mai',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Long Biên',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Bắc Từ Liêm',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Thanh Trì',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Gia Lâm',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Đông Anh',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Sóc Sơn',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Hà Đông',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thị Xã Sơn Tây',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Ba Vì',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Phúc Thọ',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Thạch Thất',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Quốc Oai',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Chương Mỹ',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Đan Phượng',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Hoài Đức',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Thanh Oai',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Ứng Hòa',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Thường Tín',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Phú Xuyên',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Mê Linh',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận Nam Từ Liêm',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận 1',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận 2',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận 3',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Quận 4',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận 5',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận 6',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận 7',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận 8',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận 9',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận 10',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận 11',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận 12',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Gò Vấp',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Tân Bình',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Tân Phú',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Bình Thạnh',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Phú Nhuận',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Thủ Đức',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Bình Tân',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bình Chánh',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Củ Chi',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hóc Môn',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Nhà Bè',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Cần Giờ',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Hồng Bàng',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Lê Chân',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Ngô Quyền',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Kiến An',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Hải An',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Đồ Sơn',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện An Lão',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Kiến Thụy',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Thủy Nguyên',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện An Dương',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tiên Lãng',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Vĩnh Bảo',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Cát Hải',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bạch Long Vĩ',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Dương Kinh',
                'parent_id'=>63,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Hải Châu',
                'parent_id'=>62,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Thanh Khê',
                'parent_id'=>62,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Sơn Trà',
                'parent_id'=>62,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Ngũ Hành Sơn',
                'parent_id'=>62,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Liên Chiểu',
                'parent_id'=>62,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hòa Vang',
                'parent_id'=>62,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Quận Cẩm Lệ',
                'parent_id'=>62,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hoàng Sa',
                'parent_id'=>62,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Hà Giang',
                'parent_id'=>22,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Đồng văn',
                'parent_id'=>22,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Mèo vạc',
                'parent_id'=>22,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Yên Minh',
                'parent_id'=>22,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Quản Bạ',
                'parent_id'=>22,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Vị Xuyên',
                'parent_id'=>22,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bắc Mê',
                'parent_id'=>22,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hoàng Su Phì',
                'parent_id'=>22,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bắc Quang',
                'parent_id'=>22,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Xín Mần',
                'parent_id'=>22,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Quang Bình',
                'parent_id'=>22,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phô Cao Bằng',
                'parent_id'=>15,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bảo Lạc',
                'parent_id'=>15,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Thông Nông',
                'parent_id'=>15,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hà Quảng',
                'parent_id'=>15,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Trà Lĩnh',
                'parent_id'=>15,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Trùng Khánh',
                'parent_id'=>15,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Nguyên Bình',
                'parent_id'=>15,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hòa An',
                'parent_id'=>15,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Quảng Yên',
                'parent_id'=>15,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Thạch An',
                'parent_id'=>15,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hạ Lang',
                'parent_id'=>15,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bảo Lâm',
                'parent_id'=>15,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Phục Hòa',
                'parent_id'=>15,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Lai Châu',
                'parent_id'=>32,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tam Đường',
                'parent_id'=>32,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Phong Thổ',
                'parent_id'=>32,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Sìn Hồ',
                'parent_id'=>32,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Mường Tè',
                'parent_id'=>32,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Than Uyên',
                'parent_id'=>32,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tân Uyên',
                'parent_id'=>32,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Nậm Nhùn',
                'parent_id'=>32,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Lào Cai',
                'parent_id'=>35,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bảo Thắng',
                'parent_id'=>35,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bảo Uyên',
                'parent_id'=>35,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bát Xát',
                'parent_id'=>35,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bắc Hà',
                'parent_id'=>35,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Mường Khương',
                'parent_id'=>35,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Sa Pa',
                'parent_id'=>35,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Si Ma Cai',
                'parent_id'=>35,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyên Văn Bàn',
                'parent_id'=>35,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thành Phố Tuyên Quang',
                'parent_id'=>56,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lâm Bình',
                'parent_id'=>56,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Nam Hang',
                'parent_id'=>56,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Chiêm Hóa',
                'parent_id'=>56,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hàm Yên',
                'parent_id'=>56,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Yên Sơn',
                'parent_id'=>56,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Sơn Dương',
                'parent_id'=>56,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thành Phố Lạng Sơn',
                'parent_id'=>34,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Tràng Định',
                'parent_id'=>34,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bình Gia',
                'parent_id'=>34,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Văn Lãng',
                'parent_id'=>34,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bắc Sơn',
                'parent_id'=>34,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Văn Quan',
                'parent_id'=>34,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Cao Lộc',
                'parent_id'=>34,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lộc Bình',
                'parent_id'=>34,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Chi Lăng',
                'parent_id'=>34,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Đình Lập',
                'parent_id'=>34,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hữu Lũng',
                'parent_id'=>34,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thành Phố Bắc Cạn',
                'parent_id'=>6,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Chợ Đồn',
                'parent_id'=>6,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bạch Thông',
                'parent_id'=>6,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Na Rì',
                'parent_id'=>6,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Ngân Sơn',
                'parent_id'=>6,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Ba Bể',
                'parent_id'=>6,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Chợ Mới',
                'parent_id'=>6,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Pắc Nặm',
                'parent_id'=>6,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thành Phố Thái Nguyên',
                'parent_id'=>51,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Sông Công',
                'parent_id'=>51,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Định Hóa',
                'parent_id'=>51,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Phú Lương',
                'parent_id'=>51,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Võ Nhai',
                'parent_id'=>51,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Đại Từ',
                'parent_id'=>51,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Đồng Hỷ',
                'parent_id'=>51,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Phú Bình',
                'parent_id'=>51,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Phổ Yên',
                'parent_id'=>51,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thành Phố Yên Bái',
                'parent_id'=>59,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Nghĩa Lộ',
                'parent_id'=>59,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Văn Yên',
                'parent_id'=>59,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Yên Bình',
                'parent_id'=>59,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Mù Cang Chải',
                'parent_id'=>59,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Văn Chấn',
                'parent_id'=>59,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Trấn Yên',
                'parent_id'=>59,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Trạm Tấu',
                'parent_id'=>59,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lục Yên',
                'parent_id'=>59,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thành Phố Sơn La',
                'parent_id'=>48,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Quỳnh Nhai',
                'parent_id'=>48,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Mường La',
                'parent_id'=>48,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Thuân Châu',
                'parent_id'=>48,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Bắc Yên',
                'parent_id'=>48,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' =>'Huyện Phù Yên',
                'parent_id'=>48,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Mai Sơn',
                'parent_id'=>48,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Yên Châu',
                'parent_id'=>48,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Sông Mã',
                'parent_id'=>48,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Mộc Châu',
                'parent_id'=>48,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Sốp Cộp',
                'parent_id'=>48,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyền Vân Hồ',
                'parent_id'=>48,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Đoan Hùng',
                'parent_id'=>41,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Việt Trì',
                'parent_id'=>41,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Phú Thọ',
                'parent_id'=>41,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Thanh Ba',
                'parent_id'=>41,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hạ Hòa',
                'parent_id'=>41,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Cẩm Khê',
                'parent_id'=>41,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Yên Lập',
                'parent_id'=>41,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Thanh Sơn',
                'parent_id'=>41,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Phù Ninh',
                'parent_id'=>41,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tam Nông',
                'parent_id'=>41,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Thanh Thủy',
                'parent_id'=>41,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tân Sơn',
                'parent_id'=>41,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lâm Thao',
                'parent_id'=>41,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Tam Dương',
                'parent_id'=>58,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Vĩnh yên',
                'parent_id'=>58,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lập Thạch',
                'parent_id'=>58,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Vĩnh Tường',
                'parent_id'=>58,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Yên Lạc',
                'parent_id'=>58,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bình Xuyên',
                'parent_id'=>58,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Sông Lô',
                'parent_id'=>58,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Phúc Yên',
                'parent_id'=>58,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tam Đảo',
                'parent_id'=>58,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Bình Liêu',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thành Phố Hạ Long',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thành Phố Cẩm Phả',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thành Phố Uông Bí',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thành Phố Móng Cái',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Đầm Hà',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Hải Hà',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Tiên Yên',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Ba Chẽ',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thị Xã Đông Chiều',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thị Xã Quảng Yên',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Hoành Bồ',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Vân Đồn',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Cô Tô',
                'parent_id'=>45,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Yên Thế',
                'parent_id'=>5,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Bắc Giang',
                'parent_id'=>5,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lục Ngạn',
                'parent_id'=>5,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Sơn Động',
                'parent_id'=>5,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lục Nam',
                'parent_id'=>5,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tân Yên',
                'parent_id'=>5,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hiệp Hòa',
                'parent_id'=>5,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lạng Giang',
                'parent_id'=>5,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Việt Yên',
                'parent_id'=>5,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Yên Dũng',
                'parent_id'=>5,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Yên Phong',
                'parent_id'=>8,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thành Phố Bắc Ninh',
                'parent_id'=>8,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Quế Võ',
                'parent_id'=>8,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Tiên Du',
                'parent_id'=>8,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thị Xã Từ Sơn',
                'parent_id'=>8,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Thuận Thành',
                'parent_id'=>8,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Gia Bình',
                'parent_id'=>8,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Lương Tài',
                'parent_id'=>8,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Nam Sách',
                'parent_id'=>25,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Hải Dương',
                'parent_id'=>25,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Chí Linh',
                'parent_id'=>25,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Kinh Môn',
                'parent_id'=>25,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Gia Lộc',
                'parent_id'=>25,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tứ Kỳ',
                'parent_id'=>25,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Thanh Miện',
                'parent_id'=>25,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Ninh Giang',
                'parent_id'=>25,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Cẩm Giàng',
                'parent_id'=>25,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Thanh Hà',
                'parent_id'=>25,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Kim Thành',
                'parent_id'=>25,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bình Giang',
                'parent_id'=>25,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Kim Động',
                'parent_id'=>28,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Hưng Yên',
                'parent_id'=>28,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Ân Thi',
                'parent_id'=>28,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Khoái CHâu',
                'parent_id'=>28,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Yên Mỹ',
                'parent_id'=>28,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tiên Lữ',
                'parent_id'=>28,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Phù Cừ',
                'parent_id'=>28,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Mỹ Hòa',
                'parent_id'=>28,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Văn Lâm',
                'parent_id'=>28,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Văn Giang',
                'parent_id'=>28,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Đà Bắc',
                'parent_id'=>27,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Hòa Bình',
                'parent_id'=>27,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Mai Châu',
                'parent_id'=>27,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tân Lạc',
                'parent_id'=>27,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lạc Sơn',
                'parent_id'=>27,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Kỳ Sơn',
                'parent_id'=>27,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lương Sơn',
                'parent_id'=>27,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Kim Bôi',
                'parent_id'=>27,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lạc Thủy',
                'parent_id'=>27,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Cao Phong',
                'parent_id'=>27,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Yên Thủy',
                'parent_id'=>27,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Duy Tiên',
                'parent_id'=>23,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Phủ Lý',
                'parent_id'=>23,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Kim Bảng',
                'parent_id'=>23,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lý Nhân',
                'parent_id'=>23,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Thanh Liêm',
                'parent_id'=>23,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bình Lục',
                'parent_id'=>23,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Mỹ Lộc',
                'parent_id'=>37,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Nam Định',
                'parent_id'=>37,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Xuân Trường',
                'parent_id'=>37,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Giao Thủy',
                'parent_id'=>37,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Ý Yên',
                'parent_id'=>37,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Vụ Bản',
                'parent_id'=>37,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Nam Trực',
                'parent_id'=>37,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Trực Ninh',
                'parent_id'=>37,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Nghĩa Hưng',
                'parent_id'=>37,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hải Hậu',
                'parent_id'=>37,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Quỳnh Phụ',
                'parent_id'=>50,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thành Phố Thái Bình',
                'parent_id'=>50,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Hưng Hà',
                'parent_id'=>50,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Đông Hưng',
                'parent_id'=>50,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Vũ Thư',
                'parent_id'=>50,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Kiến Xương',
                'parent_id'=>50,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Tiền Hải',
                'parent_id'=>50,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Thái Thụy',
                'parent_id'=>50,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Nho Quan',
                'parent_id'=>39,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thành Phố Ninh Bình',
                'parent_id'=>39,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thành Phố Tam Điệp',
                'parent_id'=>39,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Gia Viễn',
                'parent_id'=>39,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Hoa Lư',
                'parent_id'=>39,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Yên Mô',
                'parent_id'=>39,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Kim Sơn',
                'parent_id'=>39,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Yên Khánh',
                'parent_id'=>39,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Quan Hóa',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thành Phố Thanh Hóa',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thị Xã Bỉm Sơn',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thị Xã Sầm Sơn',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Quan Sơn',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Mường Lát',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Bá Thước',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Thường Xuân',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Như Xuân',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Như Thanh',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Lang Chánh ',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện  Ngọc Lặc',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Thạch Thành',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Cẩm Thủy',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Thọ Xuân',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Vĩnh Lộc',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Thiệu Hóa',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Triệu Sơn',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Yên Định',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Nông Cống',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Đông Sơn',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Hà Trung',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Hằng Hóa',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Nga Sơn',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Hậu Lộc',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Quảng Xương',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Tĩnh Gia',
                'parent_id'=>52,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Quỳ Châu',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Vinh',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Cửa Lò',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Quỳ Hợp',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Nghĩa Đàn',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Kỳ Sơn',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tương Dương',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Con Cuông',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tân Kỳ',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Yên Thành',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Diễn Châu ',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Anh Sơn',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Đô Lương',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Thanh Chương',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Nghi Lộc',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Nam Đàn',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hưng Nguyên',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Quế Phong',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Thái Hòa',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Hoàng Mai',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Quỳ Châu',
                'parent_id'=>38,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Nghi Xuân',
                'parent_id'=>24,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Hà Tĩnh',
                'parent_id'=>24,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Hồng Lĩnh',
                'parent_id'=>24,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hương Sơn',
                'parent_id'=>24,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Đức Thọ',
                'parent_id'=>24,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Can Lộc',
                'parent_id'=>24,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hương Khê',
                'parent_id'=>24,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Thạch Hà',
                'parent_id'=>24,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Cẩm Xuyên',
                'parent_id'=>24,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Kỳ Anh',
                'parent_id'=>24,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Vũ Quang',
                'parent_id'=>24,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lộc Hà',
                'parent_id'=>24,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Kỳ Anh',
                'parent_id'=>24,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Tuyên Hóa',
                'parent_id'=>42,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Đồng Hới',
                'parent_id'=>42,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Minh Hóa',
                'parent_id'=>42,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Quảng Trạch',
                'parent_id'=>42,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bố Trạch',
                'parent_id'=>42,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Quảng Ninh',
                'parent_id'=>42,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lệ Thủy',
                'parent_id'=>42,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Ba Đồn',
                'parent_id'=>42,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Vĩnh Linh',
                'parent_id'=>46,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Đông Hà',
                'parent_id'=>46,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Quảng Trị',
                'parent_id'=>46,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Gio Linh',
                'parent_id'=>46,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Cam Lộ',
                'parent_id'=>46,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Triệu Phong',
                'parent_id'=>46,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hải Lăng',
                'parent_id'=>46,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hướng Hóa',
                'parent_id'=>46,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Đakrông',
                'parent_id'=>46,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Đảo Cồn Cỏ',
                'parent_id'=>46,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Phòng Điền',
                'parent_id'=>53,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Huế',
                'parent_id'=>53,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Quảng Điền',
                'parent_id'=>53,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Hương Trà',
                'parent_id'=>53,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Phú Vang',
                'parent_id'=>53,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã Hương Thủy',
                'parent_id'=>53,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Phú Lộc',
                'parent_id'=>53,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Nam Đông',
                'parent_id'=>53,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện A Lưới',
                'parent_id'=>53,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Duy Xuyên',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thành Phố Tam Kỳ',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thành Phố Hội An',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Duy Xuyên',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thị Xã Điện Bàn',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Đại Lộc',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Quế Sơn',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Hiệp Đức',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Thăng Bình',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Núi Thành',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Tiên Phước',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Bắc Trà My',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Đông Giang',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Phước Sơn',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Nam Trà My',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Tây Giang',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Phú Ninh',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Nông Sơn',
                'parent_id'=>43,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phô Quảng Ngãi',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện Sơn Tịnh',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Bình Sơn',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tư Nghĩa',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Nghĩa Hành',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Mô Đức',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Đức Phổ',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Ba Tơ',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Minh Long',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Sơn Hà',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Sơn Tây',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Trà Bông',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tây Trà',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Lý Sơn',
                'parent_id'=>44,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thành Phố Kon Tum',
                'parent_id'=>31,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Huyện ĐĂK GLEI',
                'parent_id'=>31,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Ngọc Hồi',
                'parent_id'=>31,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện ĐĂK Tô',
                'parent_id'=>31,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Sa Thầy',
                'parent_id'=>31,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Kon Plông',
                'parent_id'=>31,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Đăk Hà',
                'parent_id'=>31,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Kon Rẫy',
                'parent_id'=>31,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tu Mơ Rông',
                'parent_id'=>31,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện IA H'DRA",
                'parent_id'=>31,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thành Phố Quy Nhơn',
                'parent_id'=>10,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện An Lão',
                'parent_id'=>10,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hoài Ân',
                'parent_id'=>10,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Hoài Nhơn',
                'parent_id'=>10,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Phù Mỹ',
                'parent_id'=>10,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Phù Cát',
                'parent_id'=>10,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Vĩnh Thạnh',
                'parent_id'=>10,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tây Sơn',
                'parent_id'=>10,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Vân Canh',
                'parent_id'=>10,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Thị Xã An Nhơn',
                'parent_id'=>10,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => 'Huyện Tuy Phước',
                'parent_id'=>10,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thành Phố Pleiku',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Chư Păh',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Mang Yang',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện KBang',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thị Xã An Khê',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Kông Chro ',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Đức Cơ',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Chư Prông',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Chư Sê',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thị xã Ayun Pa',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Krông Pa',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Ia Grai',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Ia Pa',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Đak Pơ',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Phú Thiện',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Chư Pưh',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Đak Đoa',
                'parent_id'=>21,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => 'Thành Phố Tuy Hòa',
                'parent_id'=>60,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Đồng Xuân',
                'parent_id'=>60,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thị Xã Sông Cầu',
                'parent_id'=>60,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Tuy An',
                'parent_id'=>60,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Sơn Hòa',
                'parent_id'=>60,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Đồng Xuân',
                'parent_id'=>60,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Sông Hinh',
                'parent_id'=>60,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Tây Hòa',
                'parent_id'=>60,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Huyện Phú Hòa',
                'parent_id'=>60,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "TP.Buôn Ma Thuột",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Ea H'Leo",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Krông Buk",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Krông Năng",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện  Ea Súp",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Cư M'gar",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Krông Pắc",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Ea Kar",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện M'Đrắk",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Krông Ana",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Krông Bông",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Lắk",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Buôn Đôn",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Cư Kuin",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Thị Xã Buôn Hồ",
                'parent_id'=>16,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành Phố Nha Trang",
                'parent_id'=>29,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thành Phố Cam Ranh",
                'parent_id'=>29,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Vạn Ninh",
                'parent_id'=>29,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị Xã Ninh Hòa",
                'parent_id'=>29,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Diên Khánh",
                'parent_id'=>29,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Khánh Vĩnh",
                'parent_id'=>29,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Khánh Sơn",
                'parent_id'=>29,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Đảo Trường Sa",
                'parent_id'=>29,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Cam Lâm",
                'parent_id'=>29,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành Phố Đà Lạt",
                'parent_id'=>33,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thành Phố Bảo Lộc",
                'parent_id'=>33,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Di Linh",
                'parent_id'=>33,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Đức Trọng",
                'parent_id'=>33,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Đơn Dương",
                'parent_id'=>33,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Lạc Dương",
                'parent_id'=>33,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Đạ Huoai",
                'parent_id'=>33,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Đạ Tẻh",
                'parent_id'=>33,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Cát Tiên",
                'parent_id'=>33,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Lâm Hà",
                'parent_id'=>33,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Bảo Lâm",
                'parent_id'=>33,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Đam Rông",
                'parent_id'=>33,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Huyện Đồng Phú",
                'parent_id'=>12,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => 'Thị Xã Đồng Xoài',
                'parent_id'=>12,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Chơn Thành",
                'parent_id'=>12,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Phú Riềng",
                'parent_id'=>12,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Thị Xã Bình Long",
                'parent_id'=>12,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Lộc Ninh",
                'parent_id'=>12,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Bù Đốp",
                'parent_id'=>12,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Thị Xẫ Phước Long",
                'parent_id'=>12,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Bù Đăng",
                'parent_id'=>12,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Hớn Quản",
                'parent_id'=>12,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Bù Gia Mập",
                'parent_id'=>12,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "TP.Thủ Dầu Một",
                'parent_id'=>11,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị Xã Bến Cát",
                'parent_id'=>11,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị xã Tân Uyên",
                'parent_id'=>11,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị xã Thuận An",
                'parent_id'=>11,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị xã Dĩ An",
                'parent_id'=>11,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Phú Giáo",
                'parent_id'=>11,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Dầu Tiếng",
                'parent_id'=>11,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Bắc Tân Uyên",
                'parent_id'=>11,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Bàu Bàng",
                'parent_id'=>11,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành phố Phan Rang -Tháp Chàm",
                'parent_id'=>40,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Ninh Sơn",
                'parent_id'=>40,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Ninh Hải",
                'parent_id'=>40,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Ninh Phước",
                'parent_id'=>40,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Bác Ái",
                'parent_id'=>40,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Thuận Bắc",
                'parent_id'=>40,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Thuận Nam",
                'parent_id'=>40,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành Phố Tây Ninh",
                'parent_id'=>49,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tân Biên",
                'parent_id'=>49,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tân Châu",
                'parent_id'=>49,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Dương Minh Châu",
                'parent_id'=>49,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Châu Thành",
                'parent_id'=>49,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Hòa Thành",
                'parent_id'=>49,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Bến Cầu",
                'parent_id'=>49,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Gò Dầu",
                'parent_id'=>49,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Trảng Bảng",
                'parent_id'=>49,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành Phố Phan Thiết",
                'parent_id'=>13,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tuy Phong",
                'parent_id'=>13,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Bắc Bình",
                'parent_id'=>13,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Hàm Thuận Bắc",
                'parent_id'=>13,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Hàm Thuận Nam",
                'parent_id'=>13,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Hàm Tân",
                'parent_id'=>13,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Đức Linh",
                'parent_id'=>13,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tánh Linh",
                'parent_id'=>13,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Đảo Phú Quý",
                'parent_id'=>13,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị Xã La Gi",
                'parent_id'=>13,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành Phố Biên Hòa",
                'parent_id'=>19,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Vĩnh Cửu",
                'parent_id'=>19,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tân Phú",
                'parent_id'=>19,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Định Quán",
                'parent_id'=>19,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Thống Nhất",
                'parent_id'=>19,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị Xã Long Khánh",
                'parent_id'=>19,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Xuân Lộc",
                'parent_id'=>19,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Long Thành",
                'parent_id'=>19,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Nhơn Trạch",
                'parent_id'=>19,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Trảng Bom",
                'parent_id'=>19,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Cẩm Mỹ",
                'parent_id'=>19,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành Phố Tân An ",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Vĩnh Hưng",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Mộc Hóa",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Tân Thạnh",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Thạnh Hóa",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Đức Huệ",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Đức Hòa",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Bến Lức",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Thủ Thừa",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Châu Thành",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Tân Trụ",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Cần Đước",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Cần Giuộc",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Tân Hưng",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Thị Xã Kiến Tường",
                'parent_id'=>36,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành phố Sa Đéc",
                'parent_id'=>20,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thành phố Cao Lãnh",
                'parent_id'=>20,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Châu Thành",
                'parent_id'=>20,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Lai Vung",
                'parent_id'=>20,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Lấp Vò",
                'parent_id'=>20,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Cao Lãnh",
                'parent_id'=>20,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tháp Mười",
                'parent_id'=>20,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tam Nông",
                'parent_id'=>20,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Thanh Bình",
                'parent_id'=>20,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị Xã Hồng Ngự",
                'parent_id'=>20,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Hồng Ngự",
                'parent_id'=>20,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tân Hồng",
                'parent_id'=>20,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành phố Long Xuyên",
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Thành phố Châu Đốc",
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện An Phú",
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Thị Xã Tân Châu",
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Phú Tân",
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Tịnh Biên",
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Tri Tôn",
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Châu Phú",
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Chợ Mới",
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Châu Thành",
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Thoại Sơn",
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thành phố Vũng Tàu",
                'parent_id'=>4,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thành phố Bà Rịa",
                'parent_id'=>4,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Xuyên Mộc",
                'parent_id'=>4,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Long Điền",
                'parent_id'=>4,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Côn Đảo",
                'parent_id'=>4,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tân Thành",
                'parent_id'=>4,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Châu Đức",
                'parent_id'=>4,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Đất Đỏ",
                'parent_id'=>4,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thành Phố Mỹ Tho",
                'parent_id'=>54,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị Xã Gò Công",
                'parent_id'=>54,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Cái Bè",
                'parent_id'=>54,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Cai Lậy",
                'parent_id'=>54,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Châu Thành",
                'parent_id'=>54,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Chợ Gạo",
                'parent_id'=>54,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Gò Công Tây",
                'parent_id'=>54,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Gò Công Đông",
                'parent_id'=>54,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tân Phú Đông",
                'parent_id'=>54,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị Xã Cai Lậy",
                'parent_id'=>54,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tân Phước",
                'parent_id'=>54,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thành phố Rạch Giá",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị xã Hà Tiên",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Kiên Lương",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Hòn Đất",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tân Hiệp",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Châu Thành",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Giồng Riềng",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Gò Qua",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện An Biên",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện An Minh",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Vĩnh Thuận",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Phú Quốc",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Kiên Hải",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện U Minh Thượng",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Giang Thành",
                'parent_id'=>30,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Huyện Phong Điền",
                'parent_id'=>61,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Quận Ninh Kiều",
                'parent_id'=>61,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Quận Bình Thủy",
                'parent_id'=>61,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Quận Cái Răng",
                'parent_id'=>61,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Quận Ô Môn",
                'parent_id'=>61,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Thới Lai",
                'parent_id'=>61,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Cờ Đỏ",
                'parent_id'=>61,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Vĩnh Thạnh",
                'parent_id'=>61,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Quận Thốt Nốt",
                'parent_id'=>61,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành phố Bến Tre",
                'parent_id'=>9,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Huyện Châu Thành",
                'parent_id'=>9,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Chợ Lách",
                'parent_id'=>9,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Mỏ Cày Bắc",
                'parent_id'=>9,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Giồng Trôm",
                'parent_id'=>9,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Bình Đại",
                'parent_id'=>9,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Ba Tri",
                'parent_id'=>9,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Thạnh Phú",
                'parent_id'=>9,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Mỏ Cày Nam",
                'parent_id'=>9,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành phố Vĩnh Long",
                'parent_id'=>57,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Long Hồ",
                'parent_id'=>57,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Mang Thít",
                'parent_id'=>57,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị Xã Bình Minh",
                'parent_id'=>57,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tam Bình",
                'parent_id'=>57,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Trà Ôn",
                'parent_id'=>57,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Vũng Liêm",
                'parent_id'=>57,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Bình Tân",
                'parent_id'=>57,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "	Thành phố Trà Vinh",
                'parent_id'=>55,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Càng Long",
                'parent_id'=>55,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Cầu Kè",
                'parent_id'=>55,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tiểu Cần",
                'parent_id'=>55,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Châu Thành",
                'parent_id'=>55,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Trà Cú",
                'parent_id'=>55,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Cầu Ngang",
                'parent_id'=>55,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Duyên Hải",
                'parent_id'=>55,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị Xã Duyên Hải",
                'parent_id'=>55,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thành phố Sóc Trăng",
                'parent_id'=>47,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Kế Sách",
                'parent_id'=>47,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Mỹ Tú",
                'parent_id'=>47,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Mỹ Xuyên",
                'parent_id'=>47,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Thạnh Trị",
                'parent_id'=>47,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Long Phú",
                'parent_id'=>47,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị Xã Vĩnh Châu",
                'parent_id'=>47,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Cù Lao Dung",
                'parent_id'=>47,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị Xã Ngã Năm",
                'parent_id'=>47,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Châu Thành",
                'parent_id'=>47,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Trần Đê",
                'parent_id'=>47,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành phố Bạc Liêu",
                'parent_id'=>7,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Vĩnh Lợi",
                'parent_id'=>7,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Hồng Dân",
                'parent_id'=>7,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị Xã Giá Rai",
                'parent_id'=>7,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Phước Long",
                'parent_id'=>7,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Đông Hải",
                'parent_id'=>7,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Hòa Bình",
                'parent_id'=>7,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành phố Cà Mau",
                'parent_id'=>14,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện U Minh",
                'parent_id'=>14,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Thới Bình",
                'parent_id'=>14,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Trần Văn Thời",
                'parent_id'=>14,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Cái Nước",
                'parent_id'=>14,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Đầm Dơi",
                'parent_id'=>14,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Ngọc Hiển",
                'parent_id'=>14,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Năm Căn ",
                'parent_id'=>14,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ], [
                'name' => "Huyện Phú Tân",
                'parent_id'=>14,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành phố Điện Biên Phủ",
                'parent_id'=>18,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Thị xã Mường Lay",
                'parent_id'=>18,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Điện Biên",
                'parent_id'=>18,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tuần Giáo",
                'parent_id'=>18,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Mường Chà",
                'parent_id'=>18,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tủa Chùa",
                'parent_id'=>18,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Điện Biên Đông",
                'parent_id'=>18,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện  Mường Nhé",
                'parent_id'=>18,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Mường Ảng",
                'parent_id'=>18,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện nậm Pồ",
                'parent_id'=>18,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Huyện Đăk R'Lấp",
                'parent_id'=>17,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thị xã Gia Nghĩa",
                'parent_id'=>17,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Đăk Mil",
                'parent_id'=>17,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Cư Jút",
                'parent_id'=>17,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Đăk Song",
                'parent_id'=>17,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Krông Nô",
                'parent_id'=>17,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Đăk GLong",
                'parent_id'=>17,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],[
                'name' => "Huyện Tuy Đức",
                'parent_id'=>17,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Thành phố Vị Thanh",
                'parent_id'=>26,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name' => "Huyện Vị Thủy",
                'parent_id'=>26,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],  [
                'name' => "Huyện Long Mỹ",
                'parent_id'=>26,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],  [
                'name' => "Huyện Phụng Hiệp",
                'parent_id'=>26,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],  [
                'name' => "Huyện Châu Thành",
                'parent_id'=>26,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],  [
                'name' => "Huyện Châu Thành A",
                'parent_id'=>26,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],  [
                'name' => "Thị xã Ngã Bảy",
                'parent_id'=>26,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],  [
                'name' => "Thị xã Long Mỹ",
                'parent_id'=>26,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],

        ]);
    }
}
