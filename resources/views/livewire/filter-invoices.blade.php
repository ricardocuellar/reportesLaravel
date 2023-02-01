<div>
    {{-- Filtros --}}
    <div class="bg-white rounded p-8 shadow mb-6">
        <h2 class="text-2xl font-semibold">Generar reportes</h2>

        <div class="mb-4">
            Serie:
            <select wire:model="filters.serie" name="serie" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <option value="">Todas</option>
                <option value="F001">F001</option>
                <option value="B001">B001</option>
            </select>
        </div>

        <div class="flex space-x-4 mb-4">
            <div>
                Desde el N°:
                <x-jet-input wire:model="filters.fromNumber" type="text" class="w-20" />
            </div>

            <div>
                Hasta el N°:
                <x-jet-input wire:model="filters.toNumber" type="text" class="w-20" />
            </div>
        </div>

        <div class="flex space-x-4 mb-4">
            <div>
                Desde fecha:
                <x-jet-input wire:model="filters.fromDate" type="date" class="w-36" />
            </div>

            <div>
                Hasta fecha:
                <x-jet-input wire:model="filters.toDate" type="date" class="w-36" />
            </div>
        </div>

        <x-jet-button>
            Generar reporte

        </x-jet-button>

    </div>

    {{-- Tabla --}}
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Serie
                </th>
                <th scope="col" class="px-6 py-3">
                    Correlativo
                </th>
                <th scope="col" class="px-6 py-3">
                    Base
                </th>
                <th scope="col" class="px-6 py-3">
                    IVA
                </th>
                <th scope="col" class="px-6 py-3">
                    Total
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
            <tr class="bg-white border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    {{ $invoice->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $invoice->serie }}
                </td>
                <td class="px-6 py-4">
                    {{ $invoice->correlative }}
                </td>
                <td class="px-6 py-4">
                    $ {{ $invoice->base }} MXN
                </td>
                <td class="px-6 py-4">
                    $ {{ $invoice->iva }} MXN
                </td>
                <td class="px-6 py-4">
                    $ {{ $invoice->total }} MXN
                </td>
                <td class="px-6 py-4">
                    {{ $invoice->created_at->format('d/m/y') }}
                </td>
            </tr>
            @endforeach
            

        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $invoices->links() }}
</div>

</div>
