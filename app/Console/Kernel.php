<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Định nghĩa task định kỳ, ví dụ mỗi 5 phút sẽ chạy lệnh cập nhật end_price cho các auctions.
        $schedule->command('auction:update-end-price')->everyFiveMinutes();
    }
    protected $middlewareGroups = [
        'web' => [
            // Other middleware
            \App\Http\Middleware\AuctionsMiddleware::class, // Thêm middleware này
        ],
    ];
    

}
