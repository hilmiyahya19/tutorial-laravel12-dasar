<x-layout>
    <h1 class="text-2xl font-bold mb-6">Edit Player</h1>

    <form action="{{ route('player.update', $player) }}" method="POST" class="space-y-5 max-w-xl">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-2 font-medium">Player Name</label>
            <input
                type="text"
                name="name"
                value="{{ old('name', $player->name) }}"
                class="w-full rounded border px-4 py-2"
            >
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-2 font-medium">Date of Birth</label>
            <input
                type="date"
                name="date_of_birth"
                value="{{ old('date_of_birth', $player->date_of_birth) }}"
                class="w-full rounded border px-4 py-2"
            >
            @error('date_of_birth')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-2 font-medium">Position</label>
            <input
                type="text"
                name="position"
                value="{{ old('position', $player->position) }}"
                class="w-full rounded border px-4 py-2"
                placeholder="e.g. CF, GK, etc."
            >
            @error('position')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-2 font-medium">Market Value</label>
            <input
                type="number"
                name="market_value"
                value="{{ old('market_value', $player->market_value) }}"
                class="w-full rounded border px-4 py-2"
            >
            @error('market_value')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-2 font-medium">Coach</label>
            <select
                name="coach_id"
                class="w-full rounded border px-4 py-2"
            >
                <option value="">-- Select Coach --</option>

                @foreach ($coaches as $coach)
                    <option
                        value="{{ $coach->id }}"
                        {{ old('coach_id', $player->coach_id) == $coach->id ? 'selected' : '' }}
                    >
                        {{ $coach->name }}
                    </option>
                @endforeach
            </select>
            @error('coach_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-3">
            <button
                type="submit"
                class="bg-yellow-500 text-white px-5 py-2 rounded hover:bg-yellow-600 cursor-pointer"
            >
                Update Player
            </button>

            <a href="{{ route('player.index') }}"
               class="px-5 py-2 rounded border text-gray-600 hover:bg-gray-100">
               Cancel
            </a>
        </div>
    </form>

    <x-slot:footer>
        <strong>Edit Player page</strong>
    </x-slot:footer>
</x-layout>