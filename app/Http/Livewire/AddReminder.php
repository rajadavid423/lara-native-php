<?php

namespace App\Http\Livewire;

use App\Models\Reminder;
use Livewire\Component;
use Native\Laravel\Facades\Notification;
use Native\Laravel\Facades\Settings;
use Native\Laravel\Facades\Window;

class AddReminder extends Component
{
    public $reminder;

    function add()
    {
        $newReminder = Reminder::create(['reminder' => $this->reminder, 'when' => now()->addMinute()]);

        Notification::title('New Reminder Added!')
            ->message($newReminder->reminder)
            ->show();

        Window::close('add-reminder');

        Settings::set('reminderCount', Reminder::whereStatus('Pending')->count());
        $this->reminder = "";
    }

    public function render()
    {
        return view('livewire.add-reminder');
    }
}
