<x-layouts.user>
    <x-ui.card>
        <x-slot:title>
            {{ __((isset($department) ? 'Edit' : 'Create') . 'Department') }}
        </x-slot:title>
        <x-slot:description>
            {{ __('fill all data and submit to ' . (isset($department) ? 'edit ' : 'add ') . ' department') }}
        </x-slot:description>
        @if (isset($department))
            <livewire:admin.department.form :department="$department" />
        @else
            <livewire:admin.department.form />
        @endif
    </x-ui.card>
</x-layouts.user>
