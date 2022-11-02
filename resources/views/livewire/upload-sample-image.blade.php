<form wire:submit.prevent="upload">
    <input type="file" wire:model="file">
    @error('file')
        <div class="p-2">
            <div class="inline-flex items-center bg-white leading-none bg-red-200 text-red-800  p-2  text-sm">
                <span class="inline-flex bg-red-700 text-white rounded-full h-6 px-3 justify-center items-center">خطا</span>
                <span class="inline-flex px-2">{{ $message }}</span>
            </div>
        </div>
    @enderror
    <button type="submit">Save Photo</button>
</form>


@push('scripts')
    <script>
        // Your JS here.
    </script>
@endpush
