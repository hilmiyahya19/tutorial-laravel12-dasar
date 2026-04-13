<x-layout>
    <h1>This is Player Detail Page</h1>
    {{-- <h3 class="mb-5">Showing player according to ID {{ $id }}</h3> --}}
    <div class="flow-root">
      <dl class="-my-3 divide-y divide-gray-200 text-sm">
        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
          <dt class="font-medium text-gray-900">Name</dt>

          <dd class="text-gray-700 sm:col-span-2">{{ $player->name }}</dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
          <dt class="font-medium text-gray-900">Date of Birth</dt>

          <dd class="text-gray-700 sm:col-span-2">{{ $player->date_of_birth }}</dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
          <dt class="font-medium text-gray-900">Position</dt>

          <dd class="text-gray-700 sm:col-span-2">{{ $player->position }}</dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
          <dt class="font-medium text-gray-900">Market Value</dt>

          <dd class="text-gray-700 sm:col-span-2">{{ $player->market_value }}</dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
          <dt class="font-medium text-gray-900">Coach</dt>

          <dd class="text-gray-700 sm:col-span-2">{{ $player->coach->name }}</dd>
        </div>
      </dl>
    </div>
    <div class="mt-5 flex gap-4">
    <a href="{{ route('player.edit', $player) }}"
      class="mt-5 px-4 py-2 bg-yellow-500 text-white rounded inline-block">
      Update Player
    </a>
    <form action="{{ route('player.destroy', $player) }}" method="POST" class="mt-5">
      @csrf
      @method('DELETE')
      <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded cursor-pointer">Delete Player</button>
    </form>
    </div>
    <x-slot:footer>
        <strong>Player Detail page</strong>
    </x-slot:footer>
</x-layout>