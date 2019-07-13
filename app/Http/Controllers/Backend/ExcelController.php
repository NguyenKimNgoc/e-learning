<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16-Jun-19
 * Time: 9:14 PM
 */

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use App\Model\Orders;
use App\Reponsitories\Orders\OrdersReponsitories;
use Excel;
use Illuminate\Http\Response;;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelController extends Controller implements FromCollection, WithHeadings
{
    use Exportable;
    public $orders;
    public function __construct($orders)
    {
        $this->orders = $orders;
    }

    public function collection()
    {
        $orders = $this->orders;
            $n = 1;
            foreach ($orders as $row) {
                if($row->status == 1){
                    $success = 'Đã thanh toán';
                }elseif ($row->status == 0){
                    $success = 'Đang chờ';
                }
                $order[] = array(
                    '0' => $n++,
                    '1' => $row->id,
                    '2' => $row->full_name,
                    '3' => $row->c_title,
                    '4' => number_format($row->c_price),
                    '5' => number_format($row->c_price_sale),
                    '6' => $row->address,
                    '7' => $row->note_order,
                    '8' => $success,
                    '9' => date_format(new \DateTime($row->created_at),'d-m-Y'),
                );
            }
            return (collect($order));


    }
    public function headings(): array
    {
        return [
            'STT',
            'Mã đơn hàng',
            'Tên Người mua',
            'Tên khóa học',
            'Giá khóa học',
            'Giá sale khóa học',
            'Địa chỉ',
            'Nội dung',
            'Trạng thái',
            'Ngày mua',
        ];
    }
}