<x-filament-panels::page>
    @php
        $settings = new \App\Filament\Pages\HasilMetode();
        $results = $settings->WP();
        $V = $results['V'];
        $names = $results['names'];
    @endphp

    {{-- Output hasil WP() --}}
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    No
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Alternative
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    ID
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nilai
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($V as $key => $value)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @foreach ($names as $name)
                            @if ($key == $name->id)
                                {{ $name->name }}
                            @endif
                        @endforeach
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $key }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $value }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</x-filament-panels::page>
