<x-layouts.user>
    <x-ui.card>
        <x-slot:title>
            {{ __('Department List') }}
        </x-slot:title>
        <x-slot:description>
            {{ __('show all department list') }}
        </x-slot:description>

        <livewire:admin.department.datagrid x-cloak />
    </x-ui.card>
</x-layouts.user>
