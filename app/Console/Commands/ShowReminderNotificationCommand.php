<?php

namespace App\Console\Commands;

use App\Models\Reminder;
use Illuminate\Console\Command;
use Native\Laravel\Facades\Notification;

class ShowReminderNotificationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:show-reminder-notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $reminders = Reminder::where('when', '<=', now())->whereStatus('Pending')->get();

        $reminders->each(function ($reminder) {
            $reminder->update(['status' => 'Reminded']);
            Notification::title('This is to remind you!')
                ->message('Your reminder - '.$reminder->reminder)
                ->show();
        });
    }
}
