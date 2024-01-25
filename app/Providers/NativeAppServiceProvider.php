<?php

namespace App\Providers;

use App\Events\OpenAddReminderEvent;
use Native\Laravel\Facades\Window;
use Native\Laravel\Contracts\ProvidesPhpIni;
use Native\Laravel\Menu\Menu;

class NativeAppServiceProvider implements ProvidesPhpIni
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Window::open()
            ->title('Reminder App')
            ->route('reminders')
            ->showDevTools(false);
//            ->width(400)
//            ->height(400);

//        Window::open('add-reminder')
//            ->title('Add Reminder')
//            ->route('add-reminder')
//            ->showDevTools(false);


//        Menu::new()
//            ->appMenu()
//            ->submenu('My Menu',
//                Menu::new()
//                    ->event(OpenAddReminderEvent::class, 'Add Reminder', 'CmdOrCtrl+A')
//                    ->link('https://laravel.com', 'Laravel', "CmdOrCtrl+L")
//                    ->link('https://nativephp.com', 'NativePHP', "CmdOrCtrl+N")
//                    ->link('https://github.com/rajadavid423', 'RajaDavid', "CmdOrCtrl+R")
//                    ->toggleFullscreen()
//                    ->separator()
//                    ->quit()
//            )
//            ->register();
    }

    /**
     * Return an array of php.ini directives to be set.
     */
    public function phpIni(): array
    {
        return [
        ];
    }
}
