<div>
    <div class="container mx-auto mt-8 p-4">
        <div class="max-w-md mx-auto bg-white rounded p-6 shadow-md">
            <h3 class="text-2xl font-bold text-center mb-4">Reminder List</h3>

            <ul class="list-none p-0" id="reminderList">
                @foreach ($reminders as $reminder)
                    <li class="mb-2 p-2 bg-gray-200 rounded"><p>{{ $reminder->reminder }} <small>Remind you in {{ $reminder->when->diffForHumans() }}</small></p></li>
                @endforeach
            </ul>

            <div class="mt-4">
                <button wire:click="openAddReminder" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 transition">Add New Reminder</button>
            </div>
        </div>
    </div>
</div>
