<x-layout>
    <h1 class="text-2xl font-bold mb-6">Create Player</h1>

    <form action="" method="POST" class="space-y-5 max-w-xl">
        @csrf

        <div>
            <label class="block mb-2 font-medium">Player Name</label>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="w-full rounded border px-4 py-2"
                required
            >
        </div>

        <div>
            <label class="block mb-2 font-medium">Date of Birth</label>
            <input
                type="date"
                name="date_of_birth"
                value="{{ old('date_of_birth') }}"
                class="w-full rounded border px-4 py-2"
                required
            >
        </div>

        <div>
            <label class="block mb-2 font-medium">Position</label>
            <input
                type="text"
                name="position"
                value="{{ old('position') }}"
                class="w-full rounded border px-4 py-2"
                placeholder="e.g. CF, GK, etc."
                required
            >
        </div>

        <div>
            <label class="block mb-2 font-medium">Market Value</label>
            <input
                type="number"
                name="market_value"
                value="{{ old('market_value') }}"
                class="w-full rounded border px-4 py-2"
                required
            >
        </div>

        <div>
            <label class="block mb-2 font-medium">Coach</label>
            <select
                name="coach_id"
                class="w-full rounded border px-4 py-2"
                required
            >
                <option value="">-- Select Coach --</option>

                @foreach ($coaches as $coach)
                    <option
                        value="{{ $coach->id }}"
                        {{ old('coach_id') == $coach->id ? 'selected' : '' }}
                    >
                        {{ $coach->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button
            type="submit"
            class="bg-teal-600 text-white px-5 py-2 rounded hover:bg-teal-700 cursor-pointer"
        >
            Create Player
        </button>
    </form>

    <x-slot:footer>
        <strong>Create Player page</strong>
    </x-slot:footer>
</x-layout>