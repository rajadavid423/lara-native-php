<div>
    <div class="container mx-auto mt-8 p-4">
        <div class="max-w-md mx-auto bg-white rounded p-6 shadow-md">
            <h3 class="text-2xl font-bold text-center mb-4">Add Reminder</h3>
            <div class="mb-4">
                <label for="reminder" class="block text-sm font-semibold text-gray-600">Enter your reminder:</label>
                <textarea class="form-input mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" id="reminder" rows="3" placeholder="Type your reminder here" wire:model="reminder"></textarea>
            </div>
            <button wire:click="add" type="button" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 transition">Add Reminder</button>
        </div>
    </div>
</div>
