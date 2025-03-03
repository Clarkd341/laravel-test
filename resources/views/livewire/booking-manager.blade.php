<div class="max-w-2xl mx-auto p-6 bg-white border border-black rounded-lg shadow-lg">
    <h3 class="text-lg font-bold mb-4 text-center">Réservez une propriété</h3>

    @if (session()->has('success'))
        <div class="bg-green-500 text-white p-2 mb-4 text-center">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submitReservation">
        <!-- Sélection de la propriété -->
        <div class="mb-6">
            <label for="property_id" class="block text-sm font-medium text-gray-700">Propriété :</label>
            <select wire:model="property_id" id="property_id" required class="w-full p-2 mt-2 border border-black rounded-md">
                <option value="">Choisissez une propriété</option>
                @foreach($properties as $property)
                    <option value="{{ $property->id }}">{{ $property->name }}</option>
                @endforeach
            </select>
            @error('property_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Sélection de la date de début -->
        <div class="mb-6">
            <label for="start_date" class="block text-sm font-medium text-gray-700">Date de début :</label>
            <input type="date" wire:model="start_date" id="start_date" required class="w-full p-2 mt-2 border border-black rounded-md">
            @error('start_date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Sélection de la date de fin -->
        <div class="mb-6">
            <label for="end_date" class="block text-sm font-medium text-gray-700">Date de fin :</label>
            <input type="date" wire:model="end_date" id="end_date" required class="w-full p-2 mt-2 border border-black rounded-md">
            @error('end_date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Bouton de réservation -->
        <div class="text-center">
            <button type="submit" class="px-6 py-3 bg-gray-300 border border-black rounded-lg hover:bg-blue-400 focus:outline-none">
                Réserver
            </button>
        </div>
    </form>
</div>
