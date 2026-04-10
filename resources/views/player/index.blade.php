<x-layout>
    <h1>This is Player Page</h1>
    <h2 class="text-xl py-4 font-bold">Player List</h2>
    <p>This is the player index page content.</p>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200">
            <thead class="ltr:text-left rtl:text-right">
                <tr class="*:font-medium *:text-gray-900">
                    <th class="px-3 py-2 whitespace-nowrap">Name</th>
                    <th class="px-3 py-2 whitespace-nowrap">Date of Birth</th>
                    <th class="px-3 py-2 whitespace-nowrap">Position</th>
                    <th class="px-3 py-2 whitespace-nowrap">Market Value</th>
                    <th class="px-3 py-2 whitespace-nowrap">Details</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($data as $player)
                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-2 whitespace-nowrap">{{ $player->name }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $player->date_of_birth }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $player->position }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $player->market_value }}</td>
                        <td class="px-3 py-2 whitespace-nowrap"><a href="{{ route('player.show', $player->id) }}" class="text-teal-500 hover:text-teal-700">View Details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="py-10">
        {{ $data->appends(request()->query())->links() }}
    </div>
    <x-slot:footer>
        <strong>Player List page</strong>
    </x-slot:footer>
</x-layout>
