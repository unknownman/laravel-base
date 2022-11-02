<form wire:submit.prevent="save">
    <input type="file" wire:model="files" multiple>

    @error('files.*')
        <span class="error">{{ $message }}</span>
    @enderror

    <button type="submit">Save Photo</button>
</form>
