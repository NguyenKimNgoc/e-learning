<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18-Jun-19
 * Time: 2:36 PM
 */

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
class sendMailAutoOrdersMonthly extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send_email_admin_order_monthly:sendmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email To Admin';


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = DB::table('l_users')
            ->where('delete_flag', 0)
            ->where('l_users.group_id', 1)
            ->get();
        $getOrdersMonthly = DB::table('l_orders')
            ->leftJoin('l_customers', 'l_orders.customer_id', '=', 'l_customers.id')
            ->leftJoin('l_orders_save', 'l_orders_save.order_code', '=', 'l_orders.order_code')
            ->leftJoin('l_courses', 'l_orders_save.course_id', '=', 'l_courses.id')
            ->select('l_orders.*', 'l_courses.*', 'l_customers.full_name')
            ->Where(function ($query) {
                $query->whereDate('l_orders.created_at', '>=', Carbon::now()->startOfMonth()->toDateString())
                    ->whereDate('l_orders.created_at', '<', Carbon::now()->endOfMonth()->toDateString());
            })
            ->orWhere(function ($query) {
                $query->whereDate('l_orders.updated_at', '>=', Carbon::now()->startOfMonth()->toDateString())
                    ->whereDate('l_orders.updated_at', '<', Carbon::now()->endOfMonth()->toDateString());
            })
            ->orderBy('l_orders.id', 'desc')
            ->get();
        dd($users);
        if (!empty($users)) {
            foreach ($users as $user) {
                Mail::to($user->email)
                    ->cc('kimngoc.humg@gmail.com')
                    ->queue(new \App\Mail\sendMailAutoOrdersMonthly());
            }
        }


    }

}
