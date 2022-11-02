<div class="flex flex-row justify-around">
    <div>
        <input wire:model="file" type="file" />
        <div wire:loading wire:target="file">Uploading...</div>
        @error('file')
            <div class="pt-2 animate-pulse	 text-red-700 text-xs">{{ __($message) }}</div>
        @enderror
        @if (session()->has('message'))
            <div class="text-green-500 text-sm">
                {{ session('message') }}
            </div>
        @endif

    </div>

    <button type="button" wire:click="upload">بارگذاری</button>
</div>
