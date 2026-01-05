<div>
    <form wire:submit="create">
        {{ $this->form }}

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded dark:bg-blue-600 mt-4">
            Submit
        </button>
    </form>

    <x-filament-actions::modals />
</div>
