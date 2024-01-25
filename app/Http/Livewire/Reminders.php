<?php

namespace App\Http\Livewire;

use App\Events\OpenAddReminderEvent;
use App\Models\Reminder;
use Livewire\Component;
use Native\Laravel\Events\Settings\SettingChanged;

class Reminders extends Component
{
    public $reminders = [];

    function mount()
    {
        $this->reminders = Reminder::whereStatus('Pending')->get();
    }

    protected $listeners = [
        'native:'.SettingChanged::class => 'addNew',
    ];

    public function addNew()
    {
        $this->reminders = Reminder::whereStatus('Pending')->get();
    }

    public function render()
    {
        return view('livewire.reminders');
    }

    public function openAddReminder()
    {
        event(OpenAddReminderEvent::class);
    }
}
