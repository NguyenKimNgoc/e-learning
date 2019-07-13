<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class MajorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('l_user_major')->insert([
            [
                'name'=>'IT phần mềm ',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'IT phần cứng ',
                'parent_id'=>1,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Phi chính phủ/ Phi lợi nhuận',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Giáo dục/Đào tạo',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Media/PR/Advitising ',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Tư vấn',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Thương mại ',
                'parent_id'=>2,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Vận chuyển/Giao nhận',
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Viễn thông ',
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Kho vận ',
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Mỹ Thuật/Nghệ Thuật/Thiết Kế ',
                'parent_id'=>8,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Truyền hình/Truyền thông/Báo chí ',
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Internet/Online Media ',
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'In ấn/ Xuất bản',
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Ngân hàng',
                'parent_id'=>4,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Kiểm toán ',
                'parent_id'=>4,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Tài chính/Đầu tư',
                'parent_id'=>4,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Chứng khoán',
                'parent_id'=>4,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Bảo hiểm',
                'parent_id'=>3,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Tiếng anh cơ bản',
                'parent_id'=>6,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Luyện thi tiếng anh',
                'parent_id'=>6,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Ielts',
                'parent_id'=>6,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Toeic',
                'parent_id'=>6,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Digital Marketing',
                'parent_id'=>7,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Quảng cáo / PR',
                'parent_id'=>7,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Marketing cơ bản',
                'parent_id'=>7,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'3D/ Amination',
                'parent_id'=>8,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Thiết kế đồ họa',
                'parent_id'=>8,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Phần mềm thiết kế',
                'parent_id'=>8,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Tư duy thiết kế',
                'parent_id'=>8,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Word-Excel-Powerpoint',
                'parent_id'=>9,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Phần mềm kế toán',
                'parent_id'=>9,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
            [
                'name'=>'Phần mềm quản lý dữ liệu',
                'parent_id'=>9,
                'created_at' => Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('y-m-d H:i:s')
            ],
        ]);
    }
}
